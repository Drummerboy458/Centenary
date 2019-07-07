<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\ActActivity */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Act Activities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="act-activity-view">

    <h1 style="text-align: center;"><?= Html::encode($this->title) ?></h1>
    <div style="float: right;">
        <h4> 发布于：<?= Html::encode($model->published_at) ?></h4>
    </div>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            //'title',
            'content:ntext',
            //'published_at',
            //'holded_at',
            //'updated_at',
            //'sponsor',
            //'location',
        ],
    ]) ?>

</div>
