<?php
/**
 * Team:404NotFound,NKU
 * Coding by:史晓融 1711438,20190721
 * This is Message Check of backend web
 */

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Message */

$this->title = 'Update Message: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Messages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="message-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
