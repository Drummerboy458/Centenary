<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $model frontend\models\ActActivity */

$this->title = $model->title;
$this->params['breadcrumbs'][] = $this->title;
?>
 
<div class="act-activity-view">

    <h1 style="text-align: center;"><?= Html::encode($this->title) ?></h1>
    <div style="margin-left: 900px;">
        <h4> 发布于：<?= Html::encode($model->published_at) ?></h4>
    </div>
    <?= DetailView::widget([
        'model' => $model,
        'template'=>'<tr><th>{label}</th><td style = "padding: 25px;25px;">{value}</td></tr>',
        'options' => ['style' => 'background-color: rgb(210, 250, 227); line-height: 60px;border-radius: 20px;'],
        'attributes' => [
            'content:ntext',
        ],
    ]) ?>
   
    

      <section id="contact-area"  >
        <div class="container">
           
            <!--end section heading-->
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <!--start contact form-->
                    <div class="contact-box text-center"; style="padding-top: 10px;">
                        
                          <div class="act-comment-form">

                            <?php $form = ActiveForm::begin(); ?>

                            <div class="col-lg-6">
                                  <?= $form->field($comment, 'author')->textInput(['maxlength' => true, 'placeholder' => '请输入姓名','style' => 'height: 40px;']) ?>
                            </div>
                           
                            <div class="col-lg-6">
                            <?= $form->field($comment, 'identity')->textInput(['maxlength' => true, 'placeholder'=>'请输入校友信息，如xx级、xx学院','style' => 'height: 40px;']) ?>
                            </div>

                            <div class="col-lg-12" style="height: 50px;">

                            <?= $form->field($comment, 'content')->textarea(['rows' => 1,'placeholder'=>'请写下您的留言','id'=>"saytext" ,'style' => 'min-height: 35px;']) ?>
                            </div>

                            <div class="form-group" style="float: right;padding-top: 28px; padding-right: 30px;width: ">
                            <?= Html::submitButton('发送', ['class' => 'btn btn-success','style' => 'background-image : linear-gradient(to bottom, #6280c4, #c782dc);height:30px;;padding-top:5px;']) ?>
                            </div> 
                            <?php ActiveForm::end(); ?>

                         </div>
                         <div>
                                
                                <input style="padding-left: 18px; margin-top: 145px;margin-right: 100px;  height: 30px; background:none; color:purple; font-size: 14px;font-weight: normal; border: none;" type="button" class="sub_btn" value="预览">
                                <span class="emotion" style="padding-left: 700px; color: purple; font-weight: bold;">表情  |</span>
                        </div>
                    
                    </div>
                     <div id="show" style="height: 50px;width: 920px;margin-right: 1000px;border: none;"></div>
                    <!--end contact form-->
                </div>
            </div>
           
        </div>

        <?
        $count = count($comments);
        if ($totalCount == 0)
            echo "<div class = \"vempty\"> 快来做第一个评论的人吧~ </div>";
        else
            echo "<p style = \"color: purple; font-size: 15px;\"> 共计 ",$totalCount,"条评论 </p>";
        //echo $comments[4]['author'];
        for($i=0; $i<$count; $i++) {
            echo "
                <div class=\"vlist\">
                        <div class=\"vcard\">
                            <img class=\"vimg\" src=\"/images/1.png\" >
                            <div class=\"vh\">
                                <div class=\"vhead\">
                                    <span class=\"vnick\"> 
                                        ",$comments[$i]['author'],"
                                    </span>
                                     <span class=\"vsys\">
                                        ",$comments[$i]['identity'],"
                                    </span>
                                     <span class=\"vsys\">
                                         ",$comments[$i]['created_at'],"
                                    </span>
                                </div>
                                <div class=\"vcontent bubble bubble-left \" style = \" height:50px; width: 910px;\">   
                                     ",$comments[$i]['content'],"
                                </div>
                            </div>
                        </div>
                </div>      
            ";
        }
     ?>

      <?php
            echo LinkPager::widget([
                'pagination' => $pages,
            ])
        ?>
    </section>
</div>
<!--以下是活动留言展示-->
