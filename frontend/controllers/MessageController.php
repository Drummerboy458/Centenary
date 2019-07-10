<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Message;
use frontend\models\MessageForm;
use frontend\models\MessageSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;
/**
 * MessageController implements the CRUD actions for Message model.
 */
class MessageController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [

                ],
            ],
        ];
    }

    


    /**
     * 新的留言、祝福
     * @return mixed
     */
    public function actionCreate()
    {
        //表单和模型
        $form = new MessageForm();
        $model = new Message();

        $results = Message::getMessages();

        if ($form->load(Yii::$app->request->post()))
        {
            //输入验证 包括验证码
            if ($form->validate()) {
                //验证完成 获取需要存储的信息
                $model->author=$form->author;
                $model->identity=$form->identity;
                $model->content=$form->content;
                $model->status=0;

                if($model->save()) {
                    //返回主页
                    return $this->redirect(['site/index']);
                }
            }
        }

        return $this->render('create', [
            'model' => $form,
            'messages' => $results,
        ]);
    }

    public function actionIndex(){


        $query = Message::find()->where(['status' => 1])->orderby(['created_at' => SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize'=>6]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        return $this->render('index', [
            'messages' => $models,
            'pages' => $pages,
        ]);
    }

}
