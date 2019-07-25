<?php
/**
 * Team:404NotFound,NKU
 * Coding by:李汶蔚 1711351,20190721
 * This is the ActComment view of backend web
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ActComment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="act-comment-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'status')->dropDownList(['0'=>'待审核','1'=>'审核通过','2' => '审核不通过']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
