<?php
/**
 * Team:404NotFound,NKU
 * Coding by:李汶蔚 1711351,20190721
 * This is the ActActivity view of backend web
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ActActivity */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="act-activity-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <!-- <?= $form->field($model, 'published_at')->textInput() ?>
 -->
    <?= $form->field($model, 'holded_at')->textInput() ?>

    <!-- <?= $form->field($model, 'updated_at')->textInput() ?> -->

    <?= $form->field($model, 'sponsor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_filter')->dropDownList(['201810'=>'201810','201811'=>'201811','201812' => '201812','201901' => '201901','201902' => '201902','201903' => '201903','201904' => '201904','201905' => '201905','201906' => '201906','201907' => '201907','201908' => '201908','201909' => '201909','201910' => '201910'],['prompt'=>'请选择相应年月']) ?>


    <?= $form->field($model, 'category_id')->dropDownList(['1'=>'学术活动','2'=>'纪念活动','3' => '发展活动','4' => '文体活动','5' => '校友活动'],['prompt'=>'请选择分类']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '添加' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
