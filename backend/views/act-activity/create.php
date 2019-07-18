<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ActActivity */

$this->title = '发布活动';
$this->params['breadcrumbs'][] = ['label' => 'Act Activities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="act-activity-create">

    <h3><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
