<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Act_category */

$this->title = 'Update Act Category: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Act Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="act-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
