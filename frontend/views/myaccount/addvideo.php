<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = "Add Video";

?>

<?= $this->render('myaccount-header'); ?>

<?php $form = ActiveForm::begin(); ?>
<table id="input_table">
<tr id="first_row"><td>
<?= $form->field($model, 'caption[]')->textInput(); ?>
</td><td>
<?= $form->field($model, 'video_url[]')->textInput(); ?>
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