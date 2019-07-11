<?php

namespace backend\controllers;

use Yii;
use common\models\ActActivity;
use common\models\ActActivitySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

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
        $query1 = ActActivity::find()->where(['category_id' => 1]);
        $countQuery = clone $query1;
        $totalCount1 = $countQuery->count();    //学术活动数量

        $query2 = ActActivity::find()->where(['category_id' => 2]);
        $countQuery = clone $query2;
        $totalCount2 = $countQuery->count();    //纪念活动数量

        $query3 = ActActivity::find()->where(['category_id' => 3]);
        $countQuery = clone $query3;
        $totalCount3 = $countQuery->count();    //发展活动数量

        $query4 = ActActivity::find()->where(['category_id' => 4]);
        $countQuery = clone $query4;
        $totalCount4 = $countQuery->count();    //文体活动数量

        $query5 = ActActivity::find()->where(['category_id' => 5]);
        $countQuery = clone $query5;
        $totalCount5 = $countQuery->count();    //校友活动数量

        $searchModel = new ActActivitySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'totalCount1' =>  $totalCount1,
            'totalCount2' =>  $totalCount2,
            'totalCount3' =>  $totalCount3,
            'totalCount4' =>  $totalCount4,
            'totalCount5' =>  $totalCount5,
        ]);
    }

    /**
     * Displays a single ActActivity model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
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
