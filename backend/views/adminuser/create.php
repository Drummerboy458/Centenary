<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = '注册';
$this->params['breadcrumbs'][] = ['label' => 'Adminusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">
    <div class="row" >
       <div class="col-md-4 col-md-offset-4">
            <div class="panel-heading">
            </div>
        <div class="panel-body">
            <!-- <div class="col-lg-5"> -->
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?=  $form->field($model, 'username')->label('用户名：',['style'=>['float'=>'left','margin-top'=>'10px']])->textInput(['autofocus' => true,'placeholder'=>'请输入3~18位字符']) ?>
                <?=  $form->field($model, 'nickname')->label('昵称：',['style'=>['float'=>'left','margin-top'=>'10px']])->textInput(['autofocus' => true,'placeholder'=>'请输入3~18位字符']) ?>

                <?= $form->field($model, 'email') ->label('邮箱：',['style'=>['float'=>'left','margin-top'=>'10px']])->textInput(['autofocus' => true,'placeholder'=>'请输入您的常用邮箱'])?>

                <?= $form->field($model, 'profile') ->label('个人简介：',['style'=>['float'=>'left','margin-top'=>'10px']])->textarea(['rows'=>3,'autofocus' => true,'placeholder'=>'请输入您的个人介绍'])?>


                <?= $form->field($model, 'password')->label('密码：',['style'=>['float'=>'left','margin-top'=>'10px']])->passwordInput(['placeholder'=>'请输入6~18位英文字母、数字']) ?>

                <div class="form-group">
                    <?= Html::submitButton('注册', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

</div>
