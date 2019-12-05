<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\models\Countries;
use common\models\RoleType;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

$url = Url::base();
$this->title = 'Signup';

/*

clientside validations are in frontend/web/js/custom.js

*/
?>
<section class="login-page register-page " style="background-image: url('<?= $url ?>/frontend/web/img/register-bg.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-5 login-box-main marg-auto">
                        <div class="lock-img text-center marg-auto reg-img">
                            <img src="<?= $url ?>/frontend/web/img/register-icon.png" width="80%"/>
                        </div>
                    <div class="login-box log-bx-2">
                        <h4 class="text-center">Registration</h4>
                        <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                            <div class="form-group ">
                                <?= $form->field($model, 'typeid')->dropDownList(ArrayHelper::map(RoleType::find()->asArray()->all(), 'id', 'type_name'),['prompt'=>'Select Your Role'])->Label(false); ?>
                            </div>
                            
                            <div class="form-group ">
                                <?= $form->field($model, 'firstname')->textInput([
                                    'placeholder'=>'First Name',
                                    'maxlength' => true
                                ])->label(false) ?>
                            </div>

                            <div class="form-group ">
                                <?= $form->field($model, 'lastname')->textInput([
                                    'placeholder'=>'Last Name',
                                    'maxlength' => true
                                    ])->label(false) ?>
                            </div>

                            <div class="form-group ">
                                <?= $form->field($model, 'username')->textInput([
                                    'placeholder'=>'Username',
                                    'maxlength' => true
                                    ])->label(false) ?>
                            </div>

                            <div class="form-group ">
                                <?= $form->field($model, 'designation')->textInput([
                                    'placeholder'=>'Designation',
                                    'maxlength' => true
                                    ])->label(false) ?>
                            </div>

                            <div class="form-group ">
                            <?= $form->field($model, 'country_id')->dropDownList(ArrayHelper::map(Countries::find()->asArray()->all(), 'id', 'country_name'),['prompt'=>'Select Your Country'])->Label(false); ?>
                            </div>

                            <div class="form-group ">
                                <?= $form->field($model, 'mobile')->textInput([
                                    'placeholder'=>'Mobile',
                                    'maxlength' => true
                                    ])->label(false) ?>
                            </div>

                            <div class="form-group ">
                                <?= $form->field($model, 'email')->textInput([
                                    'placeholder'=>'E-Mail',
                                    'maxlength' => true
                                    ])->label(false) ?>
                            </div>

                            <div class="form-group " id="flo_id" style="display:none;">
                                <?= $form->field($model, 'flocertid')->textInput([
                                    'placeholder'=>'Flo ID',
                                    'maxlength' => true
                                    ])->label(false) ?>
                            </div>

                            <div class="form-group">
                                <?= $form->field($model, 'password')->passwordInput([
                                    'placeholder' => 'Password',
                                    'maxlength' => true
                                    ])->label(false); ?>
                            </div>

                            <div class="form-group">
                                   <?= $form->field($model, 'password_repeat')->passwordInput([
                                    'placeholder' => 'Confirm Password',
                                    'maxlength' => true
                                    ])->label(false); ?>
                            </div>
                            
                            <div class="form-group mar-bot-0 chk-bx-reg">
                                    <label class="checkbox">
                                      <input type="checkbox" value="" required> &nbsp; Yes, I agree to all the Terms of use started here in
                                    </label>
                                    <label class="checkbox">
                                      <input type="checkbox" value="" required> &nbsp; Yes, I accept the privacy policy
                                    </label>
                            </div>


                            <?= Html::submitButton('Signup', ['class' => 'btn-block btn-custom-blue login-btn', 'id' => 'signup-click-btn', 'name' => 'signup-button']) ?>
        
                        <button class="btn-block btn-custom-black signup-btn marg-top-10 color-white text-decoration" ><a href="<?= $url ?>/site/login">Already Registered ? Login</a></button>
                        <?php ActiveForm::end(); ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
