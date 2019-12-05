<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductUpdates */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-updates-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_id')->textInput() ?>

    <?= $form->field($model, 'variety')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'specification')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'volume')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harvesting_period')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'region_grown')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'processing')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'texture')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'flavour')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'delievary_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'requested_at')->textInput() ?>

    <?= $form->field($model, 'approved_at')->textInput() ?>

    <?= $form->field($model, 'approved_ by')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
