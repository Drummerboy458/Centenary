<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MessageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '留言审核';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="message-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            'author',
            'identity',
            [
                'attribute'=>'content',
                'label'=>'内容',
                'format'=>'raw',
                'value'=>function($model){
                     return "<div style=\"width:200px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis\">".$model->content."</div>";
                                //
                },
            ],
            'status',
            //'created_at',
            //'updated_at',

            [
                'class'=>'yii\grid\ActionColumn',
                'template'=>'{view}',
            ],
        ],
    ]); ?>
</div>
