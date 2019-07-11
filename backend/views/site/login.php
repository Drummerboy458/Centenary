<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = '登录-后台管理';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];
?>
<!DOCTYPE html>
<html lang="zh">
<head>


  <title>后台 | 登录</title>

</head>
<body style=" background-image:'/images/nku.jpg'">
<div class="login-box">
    <div class="login-logo">
         <a><b style="color: #00E3E3">后台登录</b>
    </div>
    <div class="login-box-body">
         <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->label('用户名：',['style'=>['float'=>'left','margin-top'=>'5px']])->textInput(['autofocus' => true])?>

                <?= $form->field($model, 'password')->label('密码：',['style'=>['float'=>'left','margin-top'=>'10px']])->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox(['label'=>'记住我']) ?>

                <div class="form-group">
                    <?= Html::submitButton('登录', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
    </div>
</div>
</body>
</html>