<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RoleType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="role-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type_name')->textInput() ?>

    <?= $form->field($model, 'role_id')->textInput() ?>

    <?= $form->field($model, 'delete_status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
