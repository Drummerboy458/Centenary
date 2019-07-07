<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
 <div>
    <div style="background-color: rgb(247,247,247);" class = "item <?=Html::encode($model->date_filter)?>">
    	<br>
        <p> &nbsp;<?=Html::a(Html::encode('【'.$model->title.'】'),['view', 'id' => $model->id],['class' => 'item_title'] )?> </p>
         <p> &nbsp;<i class="fa fa-fw fa-user"></i> <?= Html::encode($model->sponsor) ?> </p>
        <p> &nbsp;<i class="fa fa-fw fa-calendar"></i> <?= Html::encode(date($model->holded_at)) ?> </p>
        <p> &nbsp;<i class="fa fa-fw fa-map-marker"></i> <?= Html::encode($model->location) ?></p>

        <hr>
    </div>
</div>
