<?php

use yii\helpers\Html;
use common\core\ActiveForm;
use common\helpers\ArrayHelper;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\Ad */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin([
    'options'=>[
        'class'=>"form-aaa ",
        'enctype'=>"multipart/form-data",
    ]
]); ?>
<?=$form->field($model, 'type')->selectList(
    ['1'=>'广告1','2'=>'广告2','3'=>'广告3'],
    ['class'=>'form-control c-md-2'])->label('类型') ?>

<?=$form->field($model, 'title')->textInput()->label('文章标题');?>

<!-- 单图 -->
<?=$this->renderFile('@app/views/public/_image.php',[
    'data'=>$model->image,
    'field'=>'Ad[image]',
    'title'=>'广告图片',
    'tishi'=>'单图图片尺寸为：300*300'
])?>

<?=$form->field($model, 'url')->textInput(['class'=>'form-control c-md-5'])->label('外链')->hint('外链地址必须带http')?>

<?=$form->field($model, 'sort')->textInput(['class'=>'form-control c-md-1'])->label('排序值')->hint('排序值越小越前')?>

<?=$form->field($model, 'status')->radioList(['1'=>'正常','0'=>'隐藏'])->label('状态') ?>

<div class="form-actions">
    <?= Html::submitButton('<i class="icon-ok"></i> 确定', ['class' => 'btn blue ajax-post','target-form'=>'form-aaa']) ?>
    <?= Html::Button('取消', ['class' => 'btn']) ?>
</div>

<?php ActiveForm::end(); ?>