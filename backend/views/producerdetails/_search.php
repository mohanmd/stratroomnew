<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProducerDetailsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="producer-details-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'producer_id') ?>

    <?= $form->field($model, 'founded_in') ?>

    <?= $form->field($model, 'founded_since') ?>

    <?= $form->field($model, 'producer_profile') ?>

    <?php // echo $form->field($model, 'fairtrade_impact') ?>

    <?php // echo $form->field($model, 'organization') ?>

    <?php // echo $form->field($model, 'service') ?>

    <?php // echo $form->field($model, 'faircertsince') ?>

    <?php // echo $form->field($model, 'no_of_farmers') ?>

    <?php // echo $form->field($model, 'org_background') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
