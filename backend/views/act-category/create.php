<?php
/**
 * Team:404NotFound,NKU
 * Coding by:李汶蔚 1711351,20190721
 * This is the ActCategory view of backend web
 */
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ActCategory */

$this->title = '添加分类';
$this->params['breadcrumbs'][] = ['label' => 'Act Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="act-category-create">

    <h3><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
