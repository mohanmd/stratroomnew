<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;
use backend\components\Userhelper;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Category;
use common\models\Enquirymasters;
use common\models\Inbox;
$url = Url::base();

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style>
    @font-face {
    font-family: bebasneue;
    src: url('<?= $url ?>/frontend/web/font/Fonts/bebasneue.otf') format("opentype");
  }
    </style>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
<header>
      <nav class="navbar navbar-expand-md fixed-top scrolling-navbar bg-white ">
            <div class="container">          
              <a class="navbar-brand" href="<?= $url?>"><span class="lni-bulb"></span><img src="<?= $url?>/frontend/web/img/logo.jpg"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="lni-menu"></i>
              </button>
              
              <div class="collapse navbar-collapse" id="navbarCollapse">
                  <ul class="navbar-nav mr-auto w-100 justify-content-end sec-nav">
                        <li class="nav-item">
                            <a class="nav-link page-scroll" a href="javascript:void(0);" data-toggle="modal" data-target=".bd-example-modal-lg"><button class="req-btn"><span class="post-req"><img class="menu-icon " src="<?= $url ?>/frontend/web/img/menu/post-require.svg"> </span>  Post by Requirement</button> </a>
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link page-scroll" href="#"><button class="lang-btn">Language</button></a> -->
                            <ul class="list-unstyled list-inline ct-topbar__list mar-top-10">
                                    <li class="ct-language lang-btn">Language 
                                      <ul class="list-unstyled ct-language__dropdown">
                                        <li><a href="#googtrans(en|en)" class="lang-en lang-select" data-lang="en"><img src="https://www.solodev.com/assets/google-translate/flag-usa.png" alt="USA"> English</a></li>
                                        <li><a href="#googtrans(en|ru)" class="lang-ru lang-select" data-lang="ru"><img src="<?= $url ?>/frontend/web/img/russian.png" > Russian</a></li>
                                        <li><a href="#googtrans(en|ru)" class="lang-es lang-select" data-lang="ru"><img src="<?= $url ?>/frontend/web/img/india.png" > Hindi</a></li>
                                        <li><a href="#googtrans(en|zh-CN)" class="lang-es lang-select" data-lang="zh-CN"><img src="https://www.solodev.com/assets/google-translate/flag-china.png" alt="CHINA"> Chinese</a></li>
                                        <li><a href="#googtrans(en|ja)" class="lang-es lang-select" data-lang="ja"><img src="https://www.solodev.com/assets/google-translate/flag-japan.png" alt="JAPAN"> Japanese</a></li>
                                      </ul>
                                    </li>
                            </ul>
                        </li>   
                </ul>   
              </div>
            </div>
            
            <div class="header-main container-fluid header-bg-color ">
                    <div class="container">
                        <div class="collapse navbar-collapse">
                                <ul class="navbar-nav mr-auto w-100 justify-content-end">
                                        <li class="nav-item active">
                                          <a class="nav-link page-scroll" href="<?= $url ?>/"><img class="menu-icon" src="<?= $url ?>/frontend/web/img/menu/menu-home.svg">  Home</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link page-scroll" href="#"><img class="menu-icon" src="<?= $url ?>/frontend/web/img/menu/menu-about.svg"> About Us</a>
                                        </li>  
                                        <li class="nav-item">
                                          <a class="nav-link page-scroll" href="<?= $url ?>/products"><img class="menu-icon" src="<?= $url ?>/frontend/web/img/menu/menu-product.svg"> Products</a>
                                        </li>                            
                                        <li class="nav-item">
                                          <a class="nav-link page-scroll" href="#"><img class="menu-icon" src="<?= $url ?>/frontend/web/img/menu/menu-contact.svg"> Contact</a>
                                        </li>   
                                        <?php
                                        		if(Userhelper::isloggedin())
                                            {
                                              ?>
                                                <li class="nav-item">
                                              <a class="nav-link page-scroll" href="<?= $url ?>/myaccount"><img class="menu-icon" src="<?= $url ?>/frontend/web/img/menu/menu-admin.svg"> My Account</a>
                                            </li> 
                                              <li class="nav-item">
                                              <a class="nav-link page-scroll" href="<?= $url ?>/site/logout"> <img class="menu-icon" src="<?= $url ?>/frontend/web/img/menu/menu-logout.svg"> Logout</a>
                                            </li> 
                                          <?php 
                                          }
                                            else
                                            {
                                        ?>         
                                        <li class="nav-item">
                                          <a class="nav-link page-scroll" href="<?= $url ?>/site/login"><img class="menu-icon" src="<?= $url ?>/frontend/web/img/menu/menu-login.svg"> Login</a>
                                        </li> 
                                        <li class="nav-item">
                                          <a class="nav-link page-scroll" href="<?= $url ?>/site/signup"><img class="menu-icon" src="<?= $url ?>/frontend/web/img/menu/menu-reg.svg">  Register</a>
                                        </li>  
                                        <?php
                                            }
                                        ?> 
                                      </ul>     
                        </div>
                    </div>
                </div>
          </nav> 

        </header>

        <!-- Session success messange for enquiry start -->
        <?php if (Yii::$app->session->hasFlash('enquiry_submitted')): ?>
              <div class="alert alert-success alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                  <h4><i class="icon fa fa-check"></i>Success!</h4>
                    <?= Yii::$app->session->getFlash('enquiry_submitted') ?>
              </div>
            <?php endif; ?>
            <!-- Session success messange for enquiry start -->

    <div class="main-content">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>





<!--post by requirement modal-->
 <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Enquiry</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php $form = ActiveForm::begin(['action' => ['/site/saveform']],['options' => ['method' => 'post']]); ?>

            <div class="modal-body">

  <div class="panel-group" id="accordion">
 

<div class="panel panel-default">

	  
 <div class="panel-heading">
        
<?= Html::dropDownList('category', null, 
      ArrayHelper::map(Category::find()->all(),'id', 'category_name'), array('onchange'=>'getcategory()','class' =>'form-control category','prompt'=>'Select Category')); ?>

      </div>	  
	
	  
 <div class="panel-heading">
        
<select name="subcategory" class="form-control subcategory"></select>

      </div>

	
	 <?php
$enquirymasters = Enquirymasters::find()->where(['delete_status' => 0 ])->all();

  foreach($enquirymasters as $em)
  {
  ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">

            <label for='r11' style='width: 350px;'>
			<input type='radio' id='r11' name='occupation' class="radacc" value='<?=$em->id?>' required /> 
				   <a data-toggle="collapse" data-parent="#accordion" class="anchoracc" href="#collapseOne<?=$em->id?>">
              <?=$em->subject?>
          			  </a>  

            </label>
				 
        </h4>
		
      </div>

      <div id="collapseOne<?=$em->id?>" class="panel-collapse collapse in">
        <div class="panel-body endesc">
          <p><?=$em->description?></p>
        </div>
      </div>
    </div>
	
	<?php
	}
	?>
	
	
      <div class="panel-heading">
        <h4 class="panel-title">

            <label for='r12' style='width: 350px;'>
			<input type='radio' id='r12' name='occupation' class="radacc" value='0' required /> 
				   <a data-toggle="collapse" data-parent="#accordion" class="anchoracc" href="#collapseOne0">
              Other Specific Requirements
          			  </a>  

            </label>
				 
        </h4>
		
      </div>   
	  
	    <div id="collapseOne0" class="panel-collapse collapse in">
        <div class="panel-body">
        <div class="inbox-form">
		<?php $modelenquiry = new Inbox(); ?>
    <?= $form->field($modelenquiry, 'subject')->textInput(['maxlength' => true]) ?>
    <?= $form->field($modelenquiry, 'description')->textarea(['rows' => 6]) ?>
    <?= $form->field($modelenquiry, 'type')->hiddenInput(['value'=>1])->label(false) ?>
	

        </div>
      </div>
    </div>
	  

      <div id="collapseOne0" class="panel-collapse collapse in">
        <div class="panel-body">
        <div class="inbox-form">
   
        </div>
      </div>
    </div>
	

  </div>
</form>
</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Send Enquiry</button>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
</div>
<!--post by requirement modal-->
















<!-- <footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?//= Html::encode(Yii::$app->name) ?> <?//= date('Y') ?></p>

        <p class="pull-right"><?//= Yii::powered() ?></p>
    </div>
</footer> -->

<footer class="footer-bottom pad-30 back-color-gray">
            <div class="copyright">
                <div class="row">
                    <div class="container text-center">
                    <div class="col-md-6 margin-auto">
                            <p class="marg-0">&copy; 2019 Fairtrade Network of Asia & Pacific Producers.<br>Design and Developed by <a href="#">Xmediasolutions</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>


<script>
function getcategory(){
	
	 $.ajax({
            url: '<?php echo Yii::$app->request->baseUrl. '/site/getsubcategory' ?>',
           type: 'post',
           data: {cattegory_id: $('.category').val()},
		   success: function (data) {
			    
		   var myJSON = JSON.parse(data);
		 
		 // var sub=myJSON.subcategory;
		   var html ="";
		   html +="<option value=''>--select subcategory--</option>";
           for(var l=0;l<myJSON.length;l++)
		 {
			html +="<option value="+myJSON[l].id+">"+myJSON[l].subcategoryname+"</option>";
         }
           $(".subcategory").html(html);

     }

      });
}
</script>