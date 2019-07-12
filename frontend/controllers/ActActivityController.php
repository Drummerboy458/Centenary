<?php

namespace frontend\controllers;

use Yii;
use frontend\models\ActActivity;
use frontend\models\ActActivitySearch;
use frontend\models\ActComment;
use frontend\models\ActCommentForm;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use yii\web\BadRequestHttpException;

/**
 * ActActivityController implements the CRUD actions for ActActivity model.
 */
class ActActivityController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all ActActivity models.
     * @return mixed
     */
    public function actionIndex()
    {
        
        $searchModel = new ActActivitySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ActActivity model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {

        $query = ActComment::find()->where(['status' => 1,'activity_id' => $id])->orderby(['created_at' => SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize'=>4]);
        $results = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        $comment = new ActComment();
        $form = new ActCommentForm();

        if ($form->load(Yii::$app->request->post()))
        {
            //输入验证
            if ($form->validate()) {
                //验证完成 获取需要存储的信息

                $comment->author=$form->author;
                $comment->identity=$form->identity;
                $comment->content=$form->content;
                $comment->activity_id=$id;

                if($comment->save()) {
                   //刷新
                      return $this->redirect(['view', 'id' => $id]);
                }
                else
                {
                    var_dump($comment->getErrors());//输出错误信息
                }
            }
        }
        return $this->render('view', [
            'model' => $this->findModel($id),
            'comment'=> $form,
            'comments' => $results,
            'pages' => $pages,
            'totalCount' => $countQuery->count(),
        ]);
    }

    /**
     * Creates a new ActActivity model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ActActivity();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ActActivity model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ActActivity model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ActActivity model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ActActivity the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ActActivity::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
