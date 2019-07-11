<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Act_activity */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Act Activities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="act-activity-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'content:ntext',
            'published_at',
            'holded_at',
            'updated_at',
            'sponsor',
        ],
    ]) ?>

</div>
