<?php
/**
 * Team:404NotFound,NKU
 * Coding by:李汶蔚 1711351,20190721
 * This is the ActCategory view of backend web
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ActCategory */

$this->title = '更新分类: ' . $model->type;
$this->params['breadcrumbs'][] = ['label' => 'Act Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '更改';
?>
<div class="act-category-update">

    <h3><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
