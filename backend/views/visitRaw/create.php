<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\VisitRaw */

$this->title = 'Create Visit Raw';
$this->params['breadcrumbs'][] = ['label' => 'Visit Raws', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visit-raw-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
