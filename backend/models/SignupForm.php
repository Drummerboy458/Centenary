<?php
/**
 * Team:404NotFound,NKU
 * Coding by:皮春莹 1711436,20190721
 * This is Signup form of backend web
 */
namespace backend\models;

use Yii;
use common\models\Adminuser;
use yii\base\Model;


/**
 * Signup form
 */
class SignupForm extends Adminuser
{
    public $username;
    public $nickname;
    public $email;
    public $profile;
    public $password;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [

        ['username','string','min'=>3,'max'=>18,'tooLong'=>'字符不能超过18个','tooShort'=>'至少3个字符'],
        [['username', 'nickname', 'password', 'email','profile'], 'required', 'message' => '不能为空'],
        ['username','unique','targetClass' => '\common\models\Adminuser', 'message' => '用户名已经被注册！'],

        ['nickname','string','min'=>3,'max'=>18,'tooLong'=>'字符不能超过18个','tooShort'=>'至少3个字符'],


        ['password', 'required'],
        ['password','string','min'=>6,'max'=>18,'tooLong'=>'字符不能超过18个','tooShort'=>'至少6个字符'],

         ['email', 'trim'],
         ['email', 'required'],
         ['email', 'email'],
         ['email', 'string', 'max' => 255],
         ['email', 'unique', 'targetClass' => '\common\models\Adminuser', 'message' => '邮箱已经被注册！'],
        ['email','email','message'=>'请填入正确的邮箱'],
       
        ];        
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new Adminuser();
        $user->username = $this->username;
        $user->nickname = $this->nickname;
        $user->email = $this->email;
        $user->profile = $this->profile;
        $user->setPassword($this->password);
        $user->generateAuthKey();
       
        $user->save('false');

        $auth = \Yii::$app->authManager;
        $UserRole = $auth->getRole('查看流量'); //默认分配权限

        $auth->assign($UserRole, $user->getId());

        //return $user->save();
        return 'null';

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
