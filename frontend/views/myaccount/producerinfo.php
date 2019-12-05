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
<?= $this->render('myaccount-header'); ?>
<h2>Producer Information</h2>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'founded_in')->textInput(); ?>

<?= $form->field($model, 'founded_since')->textInput(); ?>

<?= $form->field($model, 'fairtrade_impact')->textInput(); ?>

<?= $form->field($model, 'organization')->textInput(); ?>

<?= $form->field($model, 'service')->textInput(); ?>

<?= $form->field($model, 'faircertsince')->textInput()->label('Fairtrade Since'); ?>

<?= $form->field($model, 'producer_profile')->fileInput(); ?>

<?= $form->field($model, 'no_of_farmers')->textInput(); ?>

<?= $form->field($model, 'org_background')->textInput()->label('Organisation Background'); ?>

<?= Html::submitButton('Submit', ['class' => 'btn-block btn-custom-blue login-btn']) ?>

<?php ActiveForm::end(); ?>

<?= $this->render('myaccount-footer'); ?>