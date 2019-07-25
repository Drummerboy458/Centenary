<?php
/**
 * Team:404NotFound,NKU
 * Coding by:李汶蔚 1711351,20190721
 * This is the ActActivity view of backend web
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ActActivity */

$this->title = '更新活动';
$this->params['breadcrumbs'][] = ['label' => 'Act Activities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="act-activity-update">

    <h3><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
