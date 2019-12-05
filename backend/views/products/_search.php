<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'product_name') ?>

    <?= $form->field($model, 'category_id') ?>

    <?= $form->field($model, 'subcategory_id') ?>

    <?= $form->field($model, 'variety') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'specification') ?>

    <?php // echo $form->field($model, 'volume') ?>

    <?php // echo $form->field($model, 'harvesting_period') ?>

    <?php // echo $form->field($model, 'region_grown') ?>

    <?php // echo $form->field($model, 'processing') ?>

    <?php // echo $form->field($model, 'texture') ?>

    <?php // echo $form->field($model, 'flavour') ?>

    <?php // echo $form->field($model, 'organic') ?>

    <?php // echo $form->field($model, 'organic_certification') ?>

    <?php // echo $form->field($model, 'delievary_time') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'delete_status') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'approved_by') ?>

    <?php // echo $form->field($model, 'approved_at') ?>

    <?php // echo $form->field($model, 'annual_volume') ?>

    <?php // echo $form->field($model, 'altitude') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
