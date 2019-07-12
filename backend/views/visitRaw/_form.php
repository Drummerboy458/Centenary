<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\VisitRaw */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="visit-raw-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'visit_ip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'visit_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
