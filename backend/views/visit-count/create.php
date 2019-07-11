<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\VisitCount */

$this->title = 'Create Visit Count';
$this->params['breadcrumbs'][] = ['label' => 'Visit Counts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visit-count-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
