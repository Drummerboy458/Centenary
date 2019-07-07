<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Message */

$this->title = '100|为母校送祝福';
?>
<div class="row">
    <div class="col-md-6">
        <div class="message-create">

            <br><br>
            <h2>为母校送祝福</h2>
            <br>
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
            
        </div>
    </div>

    <div class="col-md-6">
       

    </div>
</div>
