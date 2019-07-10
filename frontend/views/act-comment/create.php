<?php

use yii\helpers\Html;
use frontend\assets\CommentAsset;


CommentAsset::register($this);

/* @var $this yii\web\View */
/* @var $model frontend\models\ActComment */

$this->title = 'Create Act Comment';
$this->params['breadcrumbs'][] = ['label' => 'Act Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="act-comment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
