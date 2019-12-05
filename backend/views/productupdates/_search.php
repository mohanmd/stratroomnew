<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductUpdatesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-updates-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'product_id') ?>

    <?= $form->field($model, 'variety') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'specification') ?>

    <?php // echo $form->field($model, 'volume') ?>

    <?php // echo $form->field($model, 'harvesting_period') ?>

    <?php // echo $form->field($model, 'region_grown') ?>

    <?php // echo $form->field($model, 'processing') ?>

    <?php // echo $form->field($model, 'texture') ?>

    <?php // echo $form->field($model, 'flavour') ?>

    <?php // echo $form->field($model, 'delievary_time') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'requested_at') ?>

    <?php // echo $form->field($model, 'approved_at') ?>

    <?php // echo $form->field($model, 'approved_ by') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
