<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\ActComment */

$this->title = 'Update Act Comment: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Act Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="act-comment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>