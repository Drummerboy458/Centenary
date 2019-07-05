<?php

namespace frontend\models;
use frontend\controllers\MessageController;
use Yii;
use yii\base\Model;
/**
 * This is the model class for creating "message".
 */
class MessageForm extends Model
{


    //验证码属性
    public $verifyCode; 
    public $author;
    public $identity;
    public $content;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['content', 'required', 'message'=>'祝福不能为空哦'],
            ['author', 'required', 'message'=>'姓名不能为空哦'],
            ['identity', 'required', 'message'=>'校友身份不能为空哦'],
            ['verifyCode', 'required', 'message'=>'验证码不能为空哦'],
            [['content'], 'string'],
            [['author', 'identity'], 'string', 'max' => 32],
            //验证码验证
            ['verifyCode', 'captcha', 'message'=>'验证码错误'], 
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'author' => '姓名',
            'identity' => '校友信息',
            'content' => '祝福',
            'verifyCode' => '验证码',
        ];
    }
}
