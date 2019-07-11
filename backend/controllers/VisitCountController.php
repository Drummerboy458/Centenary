<?php

namespace backend\controllers;

use Yii;
use common\models\VisitCount;
use common\models\VisitCountSearch;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\Query;

/**
 * VisitCountController implements the CRUD actions for VisitCount model.
 */
class VisitCountController extends \yii\web\Controller
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
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all VisitCount models.
     * @return mixed
     */
    public function actionIndex()
    {
        // $searchModel = new VisitCountSearch();
        // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        // return $this->render('index', [
        //     'searchModel' => $searchModel,
        //     'dataProvider' => $dataProvider,
        // ]);

        $view = Yii::$app->view;
        $cate=(new Query())->from('visit_count')->select('created_time')->orderBy('created_time')->all();
        foreach($cate as $time)
        {
            $result1[] = $time['created_time'];
        }
        $view->params['data1'] = $result1;
        $cate=(new Query())->from('visit_count')->select('nums')->orderBy('created_time')->all();
        foreach($cate as $nums)
        {
            $result2[] = $nums['nums'];
        }
        $view->params['data2'] = $result2;
        return $this->render('index');

    }

}
