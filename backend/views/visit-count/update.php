<?php
/**
 * Team:404NotFound,NKU
 * Coding by:皮春莹 1711436,20190721
 * This is visit-count of backend web
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\VisitCount */

$this->title = 'Update Visit Count: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Visit Counts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="visit-count-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
