<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use common\models\Category;
use common\models\Subcategory;
use common\models\Users;

use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'created_by')->dropDownList(
        ArrayHelper::map(Users::find()->where(['roleid' => 2])->asArray()->all(), 'id', 'username')
    ) ?>

    <?= $form->field($model, 'product_name')->textInput() ?>

    <?= $form->field($model, 'category_id')->dropDownList(
            ArrayHelper::map(Category::find()->asArray()->all(), 'id', 'category_name')
            )
?>

<?= $form->field($model, 'subcategory_id')->dropDownList(
            ArrayHelper::map(Subcategory::find()->asArray()->all(), 'id', 'subcategoryname')
            )
?>

    <?= $form->field($model, 'variety')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'specification')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'volume')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harvesting_period')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'region_grown')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'processing')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'texture')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'flavour')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organic_certification')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'delievary_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'annual_volume')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'altitude')->textInput(['maxlength' => true]) ?>

    <table id="input_table">
    <tr id="first_row"><td>
    <?= $form->field($images, 'image_name[]')->fileInput(['multiple' => true,'accept' => 'image/*','class' => 'multi-img-uploader'])->label(false); ?>
    </td><td><i style="color: green !important;" class="fa fa-plus" onclick="addrow()"></i></td>
    </tr></table>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
