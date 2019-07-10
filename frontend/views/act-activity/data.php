<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
 <div>
    <div style="background-color: rgb(247,247,247); border-radius: 30px;" class = "item <?=Html::encode($model->date_filter)?>">
        <p style="padding-top: 20px;"> &nbsp;<?=Html::a(Html::encode('【'.$model->title.'】'),['view', 'id' => $model->id],['class' => 'item_title'] )?> </p>
         <p style="padding-left: 10px;"> &nbsp;<i class="fa fa-fw fa-user"></i> <?= Html::encode($model->sponsor) ?> </p>
        <p style="padding-left: 10px;"> &nbsp;<i class="fa fa-fw fa-calendar"></i> <?= Html::encode(date($model->holded_at)) ?> </p>
        <p style="padding-bottom: 20px; padding-left: 10px; "> &nbsp;<i class="fa fa-fw fa-map-marker"></i> <?= Html::encode($model->location) ?></p>
    </div>
</div>
