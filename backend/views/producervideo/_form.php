<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Producervideo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="producervideo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'caption')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'video_url')->textInput() ?>

    <?= $form->field($model, 'producer_id')->textInput() ?>

    <?= $form->field($model, 'delete_status')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
