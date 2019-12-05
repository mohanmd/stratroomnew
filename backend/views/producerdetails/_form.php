<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProducerDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="producer-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'producer_id')->textInput() ?>

    <?= $form->field($model, 'founded_in')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'founded_since')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'producer_profile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fairtrade_impact')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'organization')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'service')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'faircertsince')->textInput() ?>

    <?= $form->field($model, 'no_of_farmers')->textInput() ?>

    <?= $form->field($model, 'org_background')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
