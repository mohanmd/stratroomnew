<?= $this->render('myaccount-header'); 

use yii\helpers\Url;
$url = Url::base();

$this->title = "Image Gallery";

?>

                           <div class="container">
                           <a href="<?= $url ?>/myaccount/addimage" class="btn btn-primary">Add Image</a>
                           </div><br>

<?php
foreach ($images as $key => $image) {
?>

                            <div class="img-gal-pg mar-bot-30">
                                <div class="gal-pg-hed">
                                    <h4 class="innerhed-prd"><?= $key ?></h4>
                                </div>
                                <div class="row">
                                <?php
                                if (!empty($image)) {
                                $i=0;
                                    foreach ($image as $img) {
                                ?>

                                
                                    <div class="col-md-3">
                                        <div class="img-gal-item text-center">
                                        <a href="<?= $url.'/myaccount/removeimage?id='.$img->id ?>">Remove</a>
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
                                } else {
                                    ?>
                                    <div class="col-md-12">No Images uploaded yet!</div>
                                    <?php
                                }
                                    ?>
                                </div>
                            </div>
                                    
<?php
}
?>



<?= $this->render('myaccount-footer'); ?>