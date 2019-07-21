<?php

/**
 * Team: 404NotFound,NKU
 * Coding by 李钟毓 1711355, 20190709
 * This this the formModel of contact-us in api.
 */

namespace api\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $message;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'message'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
        ];
    }


    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom(['lxm666nk@163.com' => '100nk'])
            ->setSubject($this->subject)
            ->setTextBody($this->name.'('.$this->email.")\n".$this->message)
            ->send();
    }

}
