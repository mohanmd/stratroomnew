<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\models\Countries;
use common\models\RoleType;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

use frontend\components\UseraccessHelper;

$url = Url::base();
$this->title = 'My Profile';
$model->password = '';

?>
<?= $this->render('myaccount-header'); ?>
<h2>My Account</h2>
<?php if (Yii::$app->session->hasFlash('profile_updated')): ?>
    <div class="alert alert-success alert-dismissable">
         <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
         <h4><i class="icon fa fa-check"></i>Updated!</h4>
         <?= Yii::$app->session->getFlash('profile_updated') ?>
    </div>
<?php endif; ?>

<?php
$customField = [
    'template' => '{beginLabel}{labelTitle}{endLabel}<div class="input-group">{input}
            <span style="padding: 5px;" class="input-group-addon"><i class="fa fa-lock"></i></span></div>'
        ];
?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'firstname')->textInput(); ?>
<?= $form->field($model, 'lastname')->textInput(); ?>
<?= $form->field($model, 'designation')->textInput(); ?>
<?= $form->field($model, 'country_id', $customField)->textInput(['value'=>$model->getCountry()->one()->country_name, 'disabled' => true]); ?>

<?= $form->field($model, 'typeid',$customField)->dropDownList(
            ArrayHelper::map(RoleType::find()->asArray()->all(), 'id', 'type_name'),[
                'disabled'=> true
            ]
            )->label('Role Type');
?>
<?= $form->field($model, 'mobile')->textInput(); ?>
<?= $form->field($model, 'email')->textInput(); ?>

<?php
if ($model->roleid === UseraccessHelper::PRODUCER) {
?>

<?= $form->field($model, 'flocertid',$customField)->textInput(['disabled'=> true]); ?>

<?php
}
?>

<?= $form->field($model, 'password')->passwordInput()->hint('Leave blank if you dont want to change password'); ?>

<?= Html::submitButton('Update', ['class' => 'btn-block btn-custom-blue login-btn']) ?>

<?php ActiveForm::end(); ?>
<?= $this->render('myaccount-footer'); ?>