<?php

/**
 * Team: 404NotFound,NKU
 * Coding by 李钟毓 1711355, 20190714
 * This this the controller of praise module in api.
 */
namespace api\controllers;

use Yii;
use yii\rest\ActiveController;
use api\models\Praise;
use yii\filters\Cors;
use yii\helpers\ArrayHelper;

class PraiseController extends ActiveController
{

    public $modelClass='api\models\Praise';

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

    public function actionAdd()
    {
        $model=new Praise();
        $request = Yii::$app->request;
        $model->ip = $request->userIP;

        if($model->validate()){
            if($model->save()){
                $db = Yii::$app->db;
                $sql = "select count(*) as num from praise";
                $command = $db->createCommand($sql);
                $num = $command->queryOne()['num'];
                return $num;
            }
        }
        else{
            return $model;
        }
    }

}
