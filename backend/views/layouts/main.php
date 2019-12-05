<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\helpers\Url;
use backend\components\Userhelper;
AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<head>
<meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <?php $this->registerCsrfMetaTags() ?>

    <title><?= Html::encode($this->title) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <?php $this->head() ?>

</head>
<body>


<?php $this->beginBody() ?>


<div class="app-container app-theme-white theme-color-bg cust-head body-tabs-shadow fixed-sidebar fixed-header">
<?php
		if(Userhelper::isloggedin())
		{
			?>
        <div class="app-header header-shadow bg-night-sky-- theme-color-bg header-text-light">
            <div class="app-header__logo">
                <div class="logo-src cust-theme-logo">Fairtrade</div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                   <!-- <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-database"> </i>
                                Statistics
                            </a>
                        </li>
                        <li class="btn-group nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-edit"></i>
                                Projects
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>
                    </ul>    -->
                
                
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle head-user-icon" src="<?php echo Url::base(true); ?>/images/avatars/1.png" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                           <a data-method="post" href="<?= Url::to(['site/logout']) ?>"> <button type="button" tabindex="0"  class="dropdown-item">Logout</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        <?= \Yii::$app->user->identity->username ?>

                                    </div>
                                    <div class="widget-subheading">
                                        Adminstrator
                                    </div>
                                </div>
                                <!--<div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button>
                                </div>-->
                            </div>
                        </div>
                    </div>        </div>
            </div>
        </div>
		<?php
		}
		?>
		<div class="app-main">
		<?php
		if(Userhelper::isloggedin())
		{
			?>
                <div class="app-sidebar sidebar-shadow bg-heavy-rain1 cust-sidebar sidebar-text-dark">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Menu</li>
                                <li>
                                    <a href="<?php echo Url::base(true); ?>/dashboard" class="mm-active">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo Url::base(true); ?>/inbox">
                                        <i class="metismenu-icon pe-7s-comment"></i>
                                        Product Enquiries
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo Url::base(true); ?>/products">
                                        <i class="metismenu-icon pe-7s-photo-gallery"></i>
                                        Product List
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo Url::base(true); ?>/userprofileupdate">
                                        <i class="metismenu-icon pe-7s-photo-gallery"></i>
                                        Profile Update Requests
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo Url::base(true); ?>/productupdates">
                                        <i class="metismenu-icon pe-7s-photo-gallery"></i>
                                        Product Update Requests
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo Url::base(true); ?>/category">
                                        <i class="metismenu-icon pe-7s-box1"></i>
                                        Category
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo Url::base(true); ?>/subcategory">
                                        <i class="metismenu-icon pe-7s-box1"></i>
                                        Sub Category
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo Url::base(true); ?>/users/producers">
                                        <i class="metismenu-icon pe-7s-users"></i>
                                        Producer Info
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo Url::base(true); ?>/users/list?id=3">
                                        <i class="metismenu-icon pe-7s-users"></i>
                                        NFO Info
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo Url::base(true); ?>/users/list?id=5">
                                        <i class="metismenu-icon pe-7s-users"></i>
                                        Trader Info
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo Url::base(true); ?>/users">
                                        <i class="metismenu-icon pe-7s-user"></i>
                                        User
                                    </a>
                                </li>
                                <!-- <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Elements
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="elements-buttons-standard.html">
                                                <i class="metismenu-icon"></i>
                                                Buttons
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-dropdowns.html">
                                                <i class="metismenu-icon">
                                                </i>Dropdowns
                                            </a>
</li>
                                    </ul>
                                </li> -->
                        
                            </ul>
                        </div>
                    </div>
                </div>    
		<?php
		}
		?>
                <div class="app-main__outer">
                    <div class="app-main__inner">
                <!--    <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>-->
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
 
                 </div>
        </div>
    </div>
</body><?php $this->endBody() ?>

</html>
<?php $this->endPage() ?>

