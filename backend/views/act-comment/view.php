<?php
/**
 * Team:404NotFound,NKU
 * Coding by:李汶蔚 1711351,20190721
 * This is the ActComment view of backend web
 */
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ActComment */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Act Comments', 'url' => ['index']];
?>
<div class="act-comment-view">

    <p>
        <?= Html::a('审核', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
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
            'content:ntext',
            'author',
            'identity',
            'activity_id',
            'created_at',
            'updated_at',
            [
                'attribute' => 'status',
                'value' => function ($model) {
                    return $model->getStatus($model->status);
                },
            ],
        ],
    ]) ?>

</div>
