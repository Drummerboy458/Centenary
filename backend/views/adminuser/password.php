<?php
/**
 * Team:404NotFound,NKU
 * Coding by:皮春莹 1711436,20190721
 * This is Adminuser view of backend web
 */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/*
*修改密码的视图文件
*/

$this->title = '修改密码';
$this->params['breadcrumbs'][] = ['label' => 'Adminusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
Yii::$app->session->getFlash('error');
Yii::$app->session->getFlash('success');
?>
<div class="user-updatepwd">
    <div class="row" >
       <div class="col-md-4 col-md-offset-4">
            <div class="panel-heading">
            </div>
        <div class="panel-body">
            <!-- <div class="col-lg-5"> -->
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <?= $form->field($model, 'oldpwd')->label('原密码：',['style'=>['float'=>'left','margin-top'=>'10px']])->passwordInput(['placeholder'=>'请输入原密码']) ?>
                <?= $form->field($model, 'newpwd')->label('新密码：',['style'=>['float'=>'left','margin-top'=>'10px']])->passwordInput(['placeholder'=>'请输入6~18位英文字母、数字']) ?>
                <div class="form-group">
                    <?= Html::submitButton('确认', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

</div>
