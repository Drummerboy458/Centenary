<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Act_activity */

$this->title = 'Create Act Activity';
$this->params['breadcrumbs'][] = ['label' => 'Act Activities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="act-activity-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>