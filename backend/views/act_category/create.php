<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Act_category */

$this->title = 'Create Act Category';
$this->params['breadcrumbs'][] = ['label' => 'Act Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="act-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
