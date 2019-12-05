<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Countries;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Users */

$this->title = 'Create Producers';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-create">

    <h1><?= Html::encode($this->title) ?></h1>

<div class="users-form">

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

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
    <?= $form->field($model2, 'founded_in')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model2, 'founded_since')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model2, 'producer_profile')->fileInput() ?>
    <?= $form->field($model2, 'fairtrade_impact')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model2, 'organization')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model2, 'service')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model2, 'faircertsince')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model2, 'no_of_farmers')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model2, 'org_background')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'roleid')->hiddenInput(['value'=> 2])->label(false); ?>

    <?= $form->field($model, 'typeid')->hiddenInput(['value'=> 1])->label(false); ?>


    <?= $form->field($model, 'created_by')->hiddenInput(['value'=>Yii::$app->user->identity->id])->label(false); ?>

    <?= $form->field($model, 'status')->hiddenInput(['value'=> 1])->label(false); ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

</div>
