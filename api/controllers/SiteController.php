<?php
namespace api\controllers;

use Yii;
use yii\rest\Controller;
use api\models\ContactForm;
use yii\filters\Cors;
use yii\helpers\ArrayHelper;

/**
 * Site controller
 */
class SiteController extends Controller
{
    

    public function behaviors()
    {
        return ArrayHelper::merge([
            [
                'class' => Cors::className(),
                'cors' => [
                    'Origin' => ['*'],
                    'Access-Control-Request-Method' => ['POST', 'HEAD', 'OPTIONS'],
                ],
                'actions' => [
                    'login' => [
                        'Access-Control-Allow-Credentials' => true,
                    ]
                ]
            ],
        ], parent::behaviors());
    }


    public function actionContact()
    {
        $model = new ContactForm();
        $request = Yii::$app->request;
        $name = $request->post('name');  
        $email = $request->post('email');  
        $subject = $request->post('subject');  
        $message = $request->post('message');  
        $model->name=$name;
        $model->email=$email;
        $model->subject=$subject;
        $model->message=$message;
        if ($model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                return 'success';
            } else {
                throw new \Exception('未知异常');
            }
        } else {
            $model->validate();
            return $model;
        }
    }
}
