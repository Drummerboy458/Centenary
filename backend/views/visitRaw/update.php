<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\VisitRaw */

$this->title = 'Update Visit Raw: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Visit Raws', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="visit-raw-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
