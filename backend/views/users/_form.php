<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Countries;
use yii\helpers\ArrayHelper;
use common\models\RoleType;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'typeid')->dropDownList(
            ArrayHelper::map(RoleType::find()->where("role_id!=2")->asArray()->all(), 'id', 'type_name')
            )
?>
    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'designation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country_id')->dropDownList(
            ArrayHelper::map(Countries::find()->asArray()->all(), 'id', 'country_name')
            )
?>
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile')->textInput() ?>

    <?= $form->field($model, 'flocertid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'roleid')->hiddenInput(['value'=> 3])->label(false); ?>

 
    <?= $form->field($model, 'created_by')->hiddenInput(['value'=>Yii::$app->user->identity->id])->label(false); ?>

    <?= $form->field($model, 'status')->hiddenInput(['value'=> 1])->label(false); ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
