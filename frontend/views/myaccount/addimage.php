<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use common\models\ProducerimageTypes;

$this->title = "Add Image";

?>
<?= $this->render('myaccount-header'); ?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
<table id="input_table">
<tr id="first_row"><td>
<?= $form->field($model, 'type_id[]')->dropDownList(
            ArrayHelper::map(ProducerimageTypes::find()->asArray()->all(), 'id', 'name'),[
                'prompt' => '-select-image-type-'
            ]) ?>
</td><td>
<?= $form->field($model, 'caption[]')->textInput(); ?>
</td><td>
<?= $form->field($model, 'image_name[]')->fileInput(['multiple' => true,'accept' => 'image/*','class' => 'multi-img-uploader']); ?>
</td><td>
<i style="color: green !important;" class="fa fa-plus" onclick="addrow()"></i>
</td>
</tr>
</table>
<div class="form-group">
    <?= Html::submitButton() ?>
</div>

<?php ActiveForm::end(); ?>

<?= $this->render('myaccount-footer'); ?>