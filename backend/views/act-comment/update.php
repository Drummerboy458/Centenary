<?php
/**
 * Team:404NotFound,NKU
 * Coding by:李汶蔚 1711351,20190721
 * This is the ActComment view of backend web
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ActComment */

$this->title = '审核: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Act Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="act-comment-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
