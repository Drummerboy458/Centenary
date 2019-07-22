<?php
/**
 * Team: 404NotFound,NKU
 * Coding by:李汶蔚 1711351,20190716
 * This is view of ActComment of frontend web.
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\ActComment */

$this->title = 'Create Act Comment';
$this->params['breadcrumbs'][] = ['label' => 'Act Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="act-comment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
