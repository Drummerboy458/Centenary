<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ActCategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="act-category-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'id')->textInput() ?> -->

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '添加' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
