<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Category;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Subcategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subcategory-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'category_id')->dropDownList(
            ArrayHelper::map(Category::find()->asArray()->all(), 'id', 'category_name')
            )
?>
    <?= $form->field($model, 'subcategoryname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
