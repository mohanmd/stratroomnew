<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\models\Countries;
use common\models\RoleType;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

$url = Url::base();
$this->title = 'Producer Information';

?>

<?php
$customField = [
    'template' => '{beginLabel}{labelTitle}{endLabel}<div class="input-group">{input}
            <span style="padding: 5px;" class="input-group-addon"><i class="fa fa-lock"></i></span></div>'
        ];
?>

<?= $this->render('myaccount-header'); ?>
<h2>Producer Information</h2>
<?php $form = ActiveForm::begin(['class' => 'frm_right_icon-container']); ?>

<?= $form->field($model, 'founded_in',$customField)->textInput(['disabled'=> true]); ?>

<?= $form->field($model, 'faircertsince',$customField)->textInput(['disabled'=> true])->label('Fairtrade Since'); ?>

<?= $form->field($model, 'no_of_farmers',$customField)->textInput(['disabled'=> true]); ?>

<?= $form->field($model, 'org_background',$customField)->textInput(['disabled'=> true])->label('Organisation Background'); ?>

<!--<?//= $form->field($model, 'producer_profile',$customField)->fileInput(['disabled'=> true]); ?>-->

<label class="control-label" for="producerdetails-producer_profile">Producer Profile</label><span style="padding: 5px;" class="input-group-addon"><i class="fa fa-lock"></i></span>
<div>
<img id="producerdetails-producer_profile" style="width:35% !important;" src="<?= $url."/".$model->producer_profile; ?>">
</div>

<?= $form->field($model, 'fairtrade_impact',$customField)->textInput(['disabled'=> true]); ?>

<?= $form->field($model, 'organization',$customField)->textInput(['disabled'=> true]); ?>

<!--<?//= Html::submitButton('Update', ['class' => 'btn-block btn-custom-blue login-btn']) ?> -->

<?php ActiveForm::end(); ?>

<?= $this->render('myaccount-footer'); ?>