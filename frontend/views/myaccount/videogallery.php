<?= $this->render('myaccount-header'); 

use yii\helpers\Url;
$url = Url::base();

$this->title = "Video Gallery";

?>

                           <div class="container">
                           <a href="<?= $url ?>/myaccount/addvideo" class="btn btn-primary">Add Video</a>
                           </div><br>

                           <!-- video gallery content -->
                           <div class="video-gal-pg">
                                <div class="gal-pg-hed">
                                    <h4 class="innerhed-prd">Video Gallery</h4>
                                </div>
                                <div class="row">
                                <?php
                                if (!empty($videos)) {
                                $i=0;
                                    foreach ($videos as $video) {
                                ?>
                                    <div class="col-md-4">
                                        <div class="vdo-gal-item text-center">
                                        <a href="<?= $url.'/myaccount/removevideo?id='.$video->id ?>">Remove</a>
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
                                } else {
                                    ?>
                                    <div class="col-md-12">No Videos uploaded yet!</div>
                                    <?php
                                }
                                    ?>
                                </div>
                            </div>
<?= $this->render('myaccount-footer'); ?>