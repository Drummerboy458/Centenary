<?php

namespace backend\controllers;

use Yii;
use common\models\VisitCount;
use common\models\VisitCountSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\Query;
/**
 * VisitCountController implements the CRUD actions for VisitCount model.
 */
class VisitCountController extends Controller
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
    // public function actionIndex()
    // {
    //     $searchModel = new VisitCountSearch();
    //     $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

    //     return $this->render('index', [
    //         'searchModel' => $searchModel,
    //         'dataProvider' => $dataProvider,
    //     ]);
    // }
    public function actionIndex()
    {
        $view = Yii::$app->view;
        $date=(new Query())->from('visit_count')->select('date')->orderBy('date')->all();
        foreach($date as $eachdate)
        {
            $result1[] = $eachdate['date'];
        }
        $view->params['data1'] = $result1;
        $count=(new Query())->from('visit_count')->select('nums')->orderBy('date')->all();
        foreach($count as $eachcount)
        {
            $result2[] = $eachcount['nums'];
        }
        $view->params['data2'] = $result2;

        return $this->render('index');

    }
    /**
     * Displays a single VisitCount model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
    protected function findModel($id)
    {
        if (($model = Visit::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    // //折线统计
    // public function getRes(){
    //     $user = M('account');
    //     $sql = "SELECT date(visit_time) AS date,count(*) as count FROM visit_raw  GROUP BY date ";
    //     $result = $user->query($sql);
    //     $this->ajaxReturn(array('code'=>200,'result'=>$result));
    // }
}
