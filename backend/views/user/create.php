<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\UserLogin */

$this->title = Yii::t('app', 'Create User Login');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User Logins'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-login-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
