<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
$url = Url::base();
$this->title = 'FairTrade';

?>

<section class="form-sect">
            <div class="form-cont-row pad-top-bot-30" id="srch-form-other">
                <div class="container">
                    <form class="form-inline srch-form-frde" action="#">
                        <div class="form-group">
                            <!-- <label for="email">Email:</label> -->
                            <!-- <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"> -->
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="SEARCH" name="search">
                                <div class="input-group-btn  srch-inpt">
                                 <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">  
                            <select class="form-control select-bx3 placeholder" placeholder="Producer Organization">
                                <option value="" selected disabled>PRODUCER ORGANIZATION</option>
                                <option>text</option>
                                 <option>text</option>
                                <option>text</option>
                            </select> 
                        </div>
                        <div class="form-group">   
                            <select class="form-control select-bx3 placeholder" placeholder="Producer Organization">
                                <option value="" selected disabled>PRODUCT CATEGORY</option>
                                <option>text</option>
                                 <option>text</option>
                                <option>text</option>
                            </select> 
                        </div>
                        <div class="form-group">    
                            <select class="form-control select-bx3 placeholder" placeholder="Producer Organization">
                                <option value="" selected disabled>COUNTRY</option>
                                <option>text</option>
                                 <option>text</option>
                                <option>text</option>
                            </select> 
                        </div>
                        <div class="form-group">
                            <!-- <label for="email">Email:</label> -->
                            <input type="text" class="form-control" id="email" placeholder="FLO ID" name="email">
                            
                        </div>
                        <!-- <div class="checkbox">
                             <label><input type="checkbox" name="remember"> Remember me</label>
                        </div> -->
                         <button type="submit" class="btn btn-custom-blue">Submit</button>
                        </form>
                </div>   
            </div> <!----form row closed ---->
        </section>

        <section class="product-section pad-50">
            <div class="container">
                <div class="row">
                        <div class="col-md-3 ">
                            <h1>Products</h1>
                          <div class="sidebar-prd">
                              <div class="panel-group" id="accordionMenu" role="tablist" aria-multiselectable="true">
                                  <h2 class="prd-cate-hed pad-lft-rht-20">Category</h2>
                                <div id="accordion" class="myaccordion">

                                <?php 
                              foreach($categories as $category)
                              {
                                ?>
                                  <div class="card">
                                    <div class="card-header" id="headingOne">
                                      <h2 class="mb-0">
                                       <a href="?category_id=<?=$category->id?>" > 
                                          <?=$category->category_name?></a> <button  class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-target="#collapse<?=$category->id?>" data-toggle="collapse" aria-expanded="false" aria-controls="collapseOne">
                                          <span class="fa-stack fa-sm" >
                                              <i class="fa fa-minus" aria-hidden="true"></i>
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                          </span>
                                        </button>
                                      </h2>
                                    </div>
                                    <div id="collapse<?=$category->id?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                      <div class="card-body">
                                        <ul>
                                        <?php
                                         $subcategories=$category->getSubcategories()->all();
                                         
                                          foreach($subcategories as $subcategory)
                                     {
                                     
                                     ?>
                                          <li><a href="?subcategory_id=<?=$subcategory->id?>" class="sub-menu-acc-a"><?=$subcategory->subcategoryname ?></a></li>
                                          <?php
                                     }
                                          ?>
                                        </ul>
                                      </div>
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
                          <?php
                        foreach ($models as $model) {
?>
                                <div class="prd-detail">
                                    <div class="row">
                                    <div class="col-md-5">
                                      <div class="product-main-img">
                                    <?php
                                        $src="";
                                        if ($model->getProductimage()->one()) {
                                          $src = $model->getProductimage()->where(['delete_status' => 0])->one()->image_name;
                                        } else {
                                          $src = "frontend/web/img/product/no-image.png";
                                        }
                                    ?>
                                            <img src="<?= $url.'/'.$src ?>" >
                                      </div>
                                    </div>
                                          <div class="col-md-7">
                                            <h3><?=$model->product_name?></h3>
                                            <table width="70%" class="marg-top-20">
                                              <tr>
                                                <td>Producer Name </td>
                                                <td>: <?=$model->getCreatedBy()->one()->firstname ." ".$model->getCreatedBy()->one()->lastname?></td>
                                              </tr>
                                              <tr>
                                                <td>Product Category</td>
                                                <td>: <?=$model->getCategory()->one()->category_name?></td>
                                              </tr>
                                              <?php
                                              if($model->subcategory_id)
                                              {
                                              ?>
                                              <tr>
                                                <td>Sub Category</td>
                                                <td>: <?=$model->getSubcategory()->one()->subcategoryname?></td>
                                              </tr>
                                              <?php
                                              }
                                              ?>
                                              <tr>
                                                <td>Variety</td>
                                                <td>: <?=$model->variety?></td>
                                              </tr>
                                              <tr>
                                                <td>Country</td>
                                                <td>: <?=$model->getCreatedBy()->one()->getCountry()->one()->country_name?></td>
                                              </tr>
                                            </table>  
                                          <div class="product-cont-btn marg-top-20">
                                              <div class="row">
                                              <div class="col-md-6">
                                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#popupmodel-<?= $model->id ?>" class="btn prd-det-cbtn btn-custom-blue"><span><img src="<?= $url ?>/frontend/web/img/call.png"></span> Contact Producer</a>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <a href="<?= $url ?>/products/view?id=<?=$model->id?>" class="btn prd-det-cbtn btn-custom-green"><span><img src="<?= $url ?>/frontend/web/img/focus.png"></span> View Detail</a>
                                                 </div>
                                              </div>
                                          </div>
                                          </div>
                                    </div>
                                </div>
                                <?php
                                 }
                                 echo LinkPager::widget([
                                  'pagination' => $pages,
                              ]);
                              
                                 ?>

                        </div>
                </div>
            </div>
        </section>

<!-- Model popup for enquiry start -->

<?php 
foreach ($models as $model) {

?>

        <div class="modal fade bd-example-modal-lg" id="popupmodel-<?= $model->id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content contact-prd-popup">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Enquiry</h5>
                <button type="button" class="close cust-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php $form = ActiveForm::begin([
    'action' =>  $url."/products/view?id=".$model->id
      ]); ?>

            <div class="modal-body">

  <div class="panel-group" id="accordion">
  <?php
  foreach($enquirymasters as $em)
  {
  ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">

            <label for='r11' style='width: 350px;'>
      <input type='radio' id='r11' name='occupation' class="radacc" value='<?=$em->id?>' required /> 
      <div class="circle"></div>
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

<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">

            <label for='r12' style='width: 350px;'>
			<input type='radio' id='r12' name='occupation' class="radacc" value='0' required /> 
      <div class="circle"></div>
				   <a data-toggle="collapse" data-parent="#accordion" class="anchoracc" href="#collapseOne0">
              Other Specific Requirements
          			  </a>  

            </label>
				 
        </h4>
		
      </div>

      <div id="collapseOne0" class="panel-collapse collapse in">
        <div class="panel-body">
        <div class="inbox-form">
    <?= $form->field($modelenquiry, 'subject')->textInput(['maxlength' => true]) ?>
    <?= $form->field($modelenquiry, 'description')->textarea(['rows' => 6]) ?>
    <?= $form->field($modelenquiry, 'type')->hiddenInput(['value'=>1])->label(false) ?>
        <?= $form->field($modelenquiry, 'product_id')->hiddenInput(['value'=>$model->id])->label(false)  ?>
        </div>
      </div>
    </div>
	
  </div>
</form>
</div>

<div class="pop-footer ">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                <button type="submit" class="btn btn-custom-gray">Send Enquiry</button>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
</div>
<?php
}
?>
<!-- Model popup for enquiry start -->