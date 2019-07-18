<?php
namespace backend\models;

use Yii;
use common\models\Adminuser;
use yii\base\Model;


/**
 * Password form，用于修改密码的表单
 */
class PasswordForm extends Adminuser
{
    public $oldpwd;
    public $newpwd;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [

        ['newpwd','string','min'=>3,'max'=>18,'tooLong'=>'字符不能超过18个','tooShort'=>'至少3个字符'],
        [['oldpwd', 'newpwd'], 'required', 'message' => '不能为空'],
        ];        
    }

    /**
     * change password
     *
     * @return bool 当输入的原密码正确且保存成功时，返回true，否则返回false
     */
    public function changePassword()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $id = YII::$app->user->id;
        $admin=  Adminuser::findIdentity($id);
        $password = $admin->password_hash;
        if(Yii::$app->getSecurity()->validatePassword($this->oldpwd, $password)){           
                $newpwd = Yii::$app->getSecurity()->generatePasswordHash($this->newpwd);
                $admin->password_hash = $newpwd;

                if($admin->save()){
                    Yii::$app->getSession()->setFlash('success', '修改成功');
                    return true;
                }else{
                    return false;
                }       
        }
        else{
            Yii::$app->session->setFlash('error','旧密码错误');
            return false;
        }
    }

    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }
    public function attributeLabels()
    {
        return [
            'username'  => '用户名',
            'nickname' => '昵称',
            'email' => '邮箱',
            'profile' => '个人简介',
            'password'  => '密码',
            //'repassword' => '确认密码'
        ];
    }
}
