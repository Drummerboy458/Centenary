<?php
/**
 * Team:404NotFound,NKU
 * Coding by:李汶蔚 1711351,20190721
 * This is the ActComment view of backend web
 */
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ActCommentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '活动评论';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="act-comment-index">

    <h3><?= Html::encode($this->title) ?></h3>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary'=>'',
        'columns' => [
            'id',
            'content:ntext',
            'author',
            'identity',
            //'activity_id',
             'created_at',
            // 'updated_at',
            [
                'attribute' => 'status',
                'value' => function ($model) {
                    return $model->getStatus($model->status);
                },
                //在搜索条件（过滤条件）中使用下拉框来搜索 
                  'filter' => ['0'=>'待审核','1'=>'审核通过','2' => '审核未通过'],  
                    //or  
                    'filter' => Html::activeDropDownList($searchModel,  
                                'status',['0'=>'待审核','1'=>'审核通过','2' => '审核未通过'],  
                                ['prompt'=>'全部']  
                     )  
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
