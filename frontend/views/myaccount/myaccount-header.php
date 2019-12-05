<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\components\UseraccessHelper;


$url = Url::base();
//$this->title = 'My Account';
//$this->params['breadcrumbs'][] = $this->title;
$role_id = Yii::$app->user->identity->roleid;

?>
        <section class="product-section pad-50">
            <div class="container">
                <div class="row">
                        <div class="col-md-3">
                            <!-- <h1>My Profile</h1> -->
                          <div class="sidebar-prd">
                              <div class="panel-group" id="accordionMenu" role="tablist" aria-multiselectable="true">
                                  <!-- <h2 class="prd-cate-hed pad-lft-rht-20">Category</h2> -->
                                  <div id="accordion" class="myaccordion">

                                  <div class="card">
                                    <div class="card-header" id="headingOne">
                                      <h2 class="mb-0">
                                        <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                         <a href="<?= $url ?>/myaccount" class="color-inherit">My Account</a> 
                                        </button>
                                      </h2>
                                    </div>
                                  </div>
<?php
if ($role_id === UseraccessHelper::PRODUCER) {
?>
                                  <div class="card">
                                    <div class="card-header" id="headingTwo">
                                      <h2 class="mb-0">
                                        <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <a href="<?= $url ?>/myaccount/producerinfo" class="color-inherit">Producer Information</a>   
                                        </button>
                                      </h2>
                                    </div>
                                  </div>

                                  <div class="card">
                                    <div class="card-header" id="heading03">
                                      <h2 class="mb-0">
                                        <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                         <a href="<?= $url ?>/myaccount/manageproduct" class="color-inherit">Manage Product</a>
                                        </button>
                                      </h2>
                                    </div>
                                  </div>
                                  
                                  <div class="card">
                                    <div class="card-header" id="heading03">
                                      <h2 class="mb-0">
                                        <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                         <a href="<?= $url ?>/myaccount/addproduct" class="color-inherit">Add Product</a>
                                        </button>
                                      </h2>
                                    </div>
                                  </div>
<?php
}
?>
                                  <div class="card">
                                    <div class="card-header" id="heading03">
                                      <h2 class="mb-0">
                                        <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                         <a href="<?= $url ?>/myaccount/inbox" class="color-inherit">Inbox</a>
                                        </button>
                                      </h2>
                                    </div>
                                  </div>

                                  <div class="card">
                                    <div class="card-header" id="heading03">
                                      <h2 class="mb-0">
                                        <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                         <a  href="<?= $url ?>/myaccount/sentitems" class="color-inherit">Sent Items</a>
                                        </button>
                                      </h2>
                                    </div>
                                  </div>
<?php
if ($role_id === UseraccessHelper::PRODUCER) {
?>
                                  <div class="card">
                                    <div class="card-header" id="heading03">
                                      <h2 class="mb-0">
                                        <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                         <a href="<?= $url ?>/myaccount/imagegallery" class="color-inherit">Image Gallery</a>
                                        </button>
                                      </h2>
                                    </div>
                                  </div>

                                  <div class="card">
                                    <div class="card-header" id="heading03">
                                      <h2 class="mb-0">
                                        <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                         <a href="<?= $url ?>/myaccount/videogallery" class="color-inherit">Video Gallery</a>
                                        </button>
                                      </h2>
                                    </div>
                                  </div>
<?php
}
?>
                                </div>
                          </div>  
                          </div>
                        </div><!--- sidebar col-md-3 closed-->
                        <div class="col-md-9">
                        <!-- Youre content will load after this & ends in myaccount-footer.php-->
                        
    
