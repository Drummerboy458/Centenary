<?php
/**
 * Team:404NotFound,NKU
 * Coding by:李汶蔚 1711351,20190721
 * This is the ActActivity view of backend web
 */
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ActActivity */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Act Activities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="act-activity-view">

   <!--  <h1><?= Html::encode($this->title) ?></h1>
 -->
    <p>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '确定删除此活动吗?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
     <?php
    $category = null;
    switch ($model->category_id) {
        case '1':
            $category = '学术活动';
            # code...
            break;
        case '2':
            $category = '纪念活动';
            # code...
            break;
        case '3':
            $category = '发展活动';
            # code...
            break;
        case '4':
            $category = '文体活动';
            # code...
            break;
        case '5':
            $category = '校友活动';
            # code...
            break;
        default:
            # code...
            break;
    }

?>
 <div>
    <div style="background-color: rgb(247,247,247); border-radius: 30px;" class = "item <?=Html::encode($model->date_filter)?>">
        <p style="padding-top: 20px;"> &nbsp;<?=Html::a(Html::encode('【'.$model->title.'】'),['view', 'id' => $model->id],['class' => 'item_title'] )?> </p>
         <p style="padding-left: 10px;"> &nbsp;<i class="fa fa-fw fa-user"></i> <?= Html::encode($model->sponsor) ?> </p>
        <p style="padding-left: 10px;"> &nbsp;<i class="fa fa-fw fa-calendar"></i> <?= Html::encode(date($model->holded_at)) ?> </p>
        <p style="padding-left: 10px; "> &nbsp;<i class="fa fa-fw fa-map-marker"></i> <?= Html::encode($model->location) ?></p>
        <p style="padding-bottom: 20px; padding-left: 10px; "> &nbsp;<i class="fa  fa-tag"></i> <?= Html::encode($category) ?></p>
    </div>
</div>
     <h1 style="text-align: center; color: black;font-weight: bold;font-size: 35px;padding: 40px;"><?= Html::encode($this->title) ?></h1>
    <div style="margin-left: 900px;">
        <h4 style="color: black;font-weight: bold;font-size: 15px;padding: 10px;"> 发布时间：<?= Html::encode($model->published_at) ?></h4>
    </div>
    <?= DetailView::widget([
        'model' => $model,
        'template'=>'<tr><th>{label}</th><td style = "padding: 25px;25px;">{value}</td></tr>',
        'options' => ['style' => 'background-color: rgb(210, 250, 227); line-height: 60px;border-radius: 20px;margin-top:10px;'],
        'attributes' => [
            'content:ntext',
        ],
    ]) ?>

</div>
