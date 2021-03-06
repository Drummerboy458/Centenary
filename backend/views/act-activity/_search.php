<?php
/**
 * Team:404NotFound,NKU
 * Coding by:李汶蔚 1711351,20190721
 * This is the ActActivity view of backend web
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ActActivitySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="act-activity-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <!-- <?= $form->field($model, 'id') ?> -->

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'content') ?>

    <?= $form->field($model, 'published_at') ?>

    <?= $form->field($model, 'holded_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'sponsor') ?>

    <?php // echo $form->field($model, 'location') ?>

    <?php // echo $form->field($model, 'date_filter') ?>

    <?php // echo $form->field($model, 'category_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
