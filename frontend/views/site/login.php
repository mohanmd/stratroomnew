<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$url = Url::base();
$this->title = 'Login';
//$this->params['breadcrumbs'][] = $this->title;
?>
    <section class="login-page pad-150" style="background-image: url('<?= $url ?>/frontend/web/img/login-bg.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-5 login-box-main marg-auto">
                        <div class="lock-img text-center marg-auto">
                            <img src="<?= $url ?>/frontend/web/img/login-lock.png" width="70%"/>
                        </div>
                    <div class="login-box ">
                        <h4 class="text-center">Login</h4>
                        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                            <div class="form-group">
                            <?= $form->field($model, 'username')->textInput(['autofocus' => true,'placeholder'=>'E-mail or Phone'])->label(false) ?>
                               
                            </div>
                            <div class="form-group">
                                  <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Password'])->label(false) ?>
                            </div>
                            <a class="forget-pasword text-dark" href="#"><span>Forgot Password</span></a>
                            <!-- <?= $form->field($model, 'rememberMe')->checkbox(); ?> -->
                            <?= Html::submitButton('Login', ['class' => 'btn-block btn-custom-blue login-btn', 'name' => 'login-button']) ?>
                            <button class="btn-block btn-custom-black signup-btn marg-top-10 color-white text-decoration" ><a href="<?= $url ?>/site/signup"> Don't Have Account ? Sign up</a></button>
                            <?php ActiveForm::end(); ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
