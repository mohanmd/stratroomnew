<?php 
use yii\helpers\Url;

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$url = Url::base();
$this->title = 'FairTrade';
?>
<?php
echo Yii::$app->controller->renderPartial('//layouts\header2');
?>
        <section class="product-section pad-50">
            <div class="container">
                <div class="row">
                        <div class="col-md-3">
                            <h1>Products</h1>
                          <div class="sidebar-prd">
                              <div class="panel-group" >
                                  <!-- <h2 class="prd-cate-hed pad-lft-rht-20">Category</h2> -->
                                  <div  class="myaccordion">
                                  <ul class="tabs-animated-shadow tabs-animated nav">
    <li class=" nav-item"><a class="nav-link active" data-toggle="tab" href="#product">Product Information
    </a></li>
    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#producer">Producer Information</a></li>
    <li  class="nav-item"><a class="nav-link" data-toggle="tab" href="#imagegallery">Image Gallery</a></li>
    <li  class="nav-item"><a class="nav-link" data-toggle="tab" href="#videogallery">Video Gallery</a></li>
  </ul>
                               

      
                                </div>
                          </div>  
                          </div>
                        </div><!--- sidebar col-md-3 closed-->
                        <div class="col-md-9">
                        <div class="tab-content">
                                <div class="prd-detail tab-pane active" id="product" role="tabpanel">
                                    <div class="row">
                                    <div class="col-md-7">
                                    <?php
                                      $src = "";
                                      if ($product_images) {
                                        $src = $product_images[0]->image_name;
                                      } else {
                                        $src = "frontend/web/img/product/no-image.png";
                                      }
                                    ?>
                                            <img class="pro_img_change" id="pro_bigimg" src="<?= $url.'/'.$src ?>" >
                                            <div class="row pad-30">
                                            <?php
                                              foreach ($product_images as $pro_img) {
                                            ?>
                                                <div class="col-md-3">
                                                    <img class="pro_thumbnail" src="<?= $url.'/'.$pro_img->image_name ?>" width="100%">
                                                </div>
                                            <?php
                                              }
                                            ?>
                                            </div>
                                    </div>
                                          <div class="col-md-5">
                                            <h3>Product Name</h3>
                                            <table width="100%">
                                              <tr>
                                                <td>Producer Name</td>
                                                <td>: <?=$model->getCreatedBy()->one()->firstname ." ".$model->getCreatedBy()->one()->lastname?></td>
                                              </tr>
                                              <tr>
                                                <td>Product</td>
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
                                                <td>Varieties</td>
                                                <td>: <?=$model->variety?></td>
                                              </tr>
                                              <tr>
                                                <td>Region Grown</td>
                                                <td>: <?=$model->processing?></td>
                                              </tr>
                                              <tr>
                                                <td>Processing</td>
                                                <td>: <?=$model->processing?></td>
                                              </tr>
                                              <tr>
                                                <td>Texture</td>
                                                <td>: <?=$model->texture?></td>
                                              </tr>
                                              <tr>
                                                <td>Flavour</td>
                                                <td>: <?=$model->flavour?></td>
                                              </tr>
                                              <tr>
                                                <td>Organic</td>
                                                <td>: <?=$model->organic?></td>
                                              </tr>
                                              <tr>
                                                <td>Organic Certification</td>
                                                <td>: <?=$model->organic_certification?></td>
                                              </tr>
                                              <tr>
                                                <td>Annual Volume</td>
                                                <td>: <?=$model->annual_volume?></td>
                                              </tr>
                                              <tr>
                                                <td>Harvesting Period</td>
                                                <td>: <?=$model->harvesting_period?></td>
                                              </tr>
                                              <tr>
                                                <td>Altitude</td>
                                                <td>: <?=$model->altitude?></td>
                                              </tr>
                                            </table>  
                                          <div class="product-cont-btn">
                                              <div class="row">
                                              <div class="col-md-10">
                                                    <a href="javascript:void(0);" data-toggle="modal" data-target=".bd-example-modal-lg" class="btn prd-det-cbtn btn-custom-blue"><span><img src="<?= $url ?>/frontend/web/img/call.png"></span> Make Enquiry</a>
                                                 </div>
                                              </div>
                                          </div>
                                          </div>
                                    </div>
                                </div>

                                <div id="producer" class="tab-pane" role="tabpanel">
                                <div class="prdcr-table">
                                <div class="gal-pg-hed">
                                    <h4 class="innerhed-prd"><?=$model->product_name?></h4>
                                </div>
                                <table width="100%">
                                    <tbody><tr>
                                        <td>FLO ID</td>
                                        <td>:  <?=$model->getCreatedBy()->one()->flocertid?></td>
                                    </tr>
                                    <tr>
                                        <td>Producer Organization Name </td>
                                        <td>:  <?=$model->getCreatedBy()->one()->getProducerDetails()->one()->organization?></td>
                                    </tr>
                                    <tr>
                                        <td>Service </td>
                                        <td>:  <?=$model->getCreatedBy()->one()->getProducerDetails()->one()->service?></td>
                                    </tr>
                                    <tr>
                                        <td>Fairtrade Certified Since </td>
                                        <td>:  <?=$model->getCreatedBy()->one()->getProducerDetails()->one()->faircertsince?></td>
                                    </tr>
                                    <tr>
                                        <td>Country </td>
                                        <td>: <?=$model->getCreatedBy()->one()->getCountry()->one()->country_name?></td>
                                    </tr>
                                    <tr>
                                        <td>Processing </td>
                                        <td>:  <?=$model->processing ?></td>
                                    </tr>
                                    <tr>
                                        <td>Texture </td>
                                        <td>: <?=$model->texture ?></td>
                                    </tr>
                                    <tr>
                                        <td>Flavours </td>
                                        <td>: <?=$model->flavour ?></td>
                                    </tr>
                                    <tr>
                                    <td>Fairtrade Premium Impact </td>
                                        <td>: <?=$model->getCreatedBy()->one()->getProducerDetails()->one()->fairtrade_impact?></td>
                                    </tr>
                                </tbody></table>
                            </div>
                                </div>
                                <div id="imagegallery" class="tab-pane" role="tabpanel">
                                  
<?php
foreach ($images as $key => $image) {
?>

                            <div class="img-gal-pg mar-bot-30">
                                <div class="gal-pg-hed">
                                    <h4 class="innerhed-prd"><?= $key ?></h4>
                                </div>
                                <div class="row">
                                <?php
                                $i=0;
                                    foreach ($image as $img) {
                                ?>

                                
                                    <div class="col-md-3">
                                        <div class="img-gal-item text-center">
                                            <a href="<?= $url.'/'.$img->image_name ?>" rel="prettyPhoto" data-lightbox="<?= $key ?>" data-title="<?= $img->caption ?>"><img src="<?= $url.'/'.$img->image_name ?>" width="100%"></a>
                                            <div class="video-caption">
                                                <p><?= $img->caption ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                    if($i % 4 == 0) echo '</div><div class="row">';
                                    }
                                    ?>
                                </div>
                            </div>
                                    
<?php
}
?>
                                </div>
                                <div id="videogallery" class="tab-pane" role="tabpanel">

                                <div class="gal-pg-hed">
                                    <h4 class="innerhed-prd">Video Gallery</h4>
                                </div>

                                <div class="row">
                                <?php
                                $i=0;
                                    foreach ($videos as $video) {
                                ?>
                                    <div class="col-md-4">
                                        <div class="vdo-gal-item text-center">
                                            <iframe width="100%"
                                            src="<?= $video->video_url ?>" allowfullscreen="allowfullscreen">
                                            </iframe>
                                            <div class="video-caption">
                                                <p><?= $video->caption ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                    if($i % 3 == 0) echo '</div><div class="row">';
                                    }
                                    ?>
                                </div>

                                </div>

                        </div>
                        </div>
                </div>
            </div>
        </section>
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Enquiry</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php $form = ActiveForm::begin(['options' => ['method' => 'post']]); ?>

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
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Send Enquiry</button>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
