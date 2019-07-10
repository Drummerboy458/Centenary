<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\VisitCountSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Visit Counts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visit-count-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Visit Count', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nums',
            'created_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
