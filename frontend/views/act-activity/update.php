<?php
/**
 * Team: 404NotFound,NKU
 * Coding by:李汶蔚 1711351,20190716
 * This is view of ActActivity of frontend web.
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\ActActivity */

$this->title = 'Update Act Activity: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Act Activities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="act-activity-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
