<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'FairTrade';

?>
 <!-- slider section -->
 <?php
echo Yii::$app->controller->renderPartial('//layouts/header2');
?>

        <section class="product-section pad-50">
            <div class="container">
                <div class="row mar-bot-30">
                <?php foreach($categories as $category)
                {
                ?>
                    <div class="col-md-3">
                        <div class="prd-home">
                          <a href="<?=Url::base()?>/products?category_id=<?=$category->id?>">
                            <img src="admin/<?=$category->image?>">
                            <div class="prd-img-cont">
                                <h4><?=$category->category_name?></h4>
                            </div>
                </a>
                        </div>
                </div>
                <?php
                                }
                ?>
                </div>
            </div>
            </div>

        </section>