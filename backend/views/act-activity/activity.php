<?php
/**
 * Team:404NotFound,NKU
 * Coding by:李汶蔚 1711351,20190721
 * This is the ActActivity view of backend web
 */
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
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
        <p style="padding-top: 20px;"> &nbsp;<?=Html::a(Html::encode('【'.$model->title.'】'),['view', 'id' => $model->id],['class' => 'item_title','style' => 'color:purple;'] )?> </p>
         <p style="padding-left: 10px;"> &nbsp;<i class="fa fa-fw fa-user"></i> <?= Html::encode($model->sponsor) ?> </p>
        <p style="padding-left: 10px;"> &nbsp;<i class="fa fa-fw fa-calendar"></i> <?= Html::encode(date($model->holded_at)) ?> </p>
        <p style="padding-left: 10px; "> &nbsp;<i class="fa fa-fw fa-map-marker"></i> <?= Html::encode($model->location) ?></p>
        <p style="padding-bottom: 20px; padding-left: 10px; "> &nbsp;<i class="fa  fa-tag"></i> <?= Html::encode($category) ?></p>
    </div>
</div>
