<?php

/**
 * Team: 404NotFound,NKU
 * Coding by 李钟毓 1711355, 20190715
 * This is the Message Form in frontend web.
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha; 
/* @var $this yii\web\View */
/* @var $model frontend\models\Message */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="message-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true, 'placeholder' => '请输入姓名']) ?>

    <?= $form->field($model, 'identity')->textInput(['maxlength' => true, 'placeholder'=>'请输入校友信息，如xx级、xx学院']) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6, 'placeholder'=>'请写下您相对母校说的话']) ?>

    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [ 
        'template' => '<div class="row"><div class="col-lg-6">{input}</div></div><br><div>{image}</div>', 
        'options' => ['class' => 'form-control','placeholder'=>"请输入验证码"],
    ]) ?>

    <br>

    <div class="form-group">
        <?= Html::submitButton('发送', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
