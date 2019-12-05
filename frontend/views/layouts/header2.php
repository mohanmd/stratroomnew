<?php
use yii\helpers\Url;

$url = Url::base();
?>
<section class="slider-sect">
        <!-- <img src="img/slide-img1.jpg" width="auto" height="400px"> -->
        
  <div id="carousel-area">
      <div id="carousel-slider" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-slider" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img src="<?= $url ?>/frontend/web/img/prdoduct-det-banner.jpg" alt="">
            <div class="carousel-caption text-left">
              <h2 class="wow fadeInRight" data-wow-delay="0.4s">Welcome to</h2>
              <h1 class="wow fadeInRight" data-wow-delay="0.4s">Fairtrade</h1>
            </div>
          </div>
          <!-- <div class="carousel-item">
            <img src="img/slide-img2.jpg" alt="">
            <div class="carousel-caption text-right">
                <h2 class="wow fadeInRight" data-wow-delay="0.4s">Wellcome</h2>
                <h1 class="wow fadeInRight" data-wow-delay="0.4s">Fairtrade</h1>
            </div>
          </div> -->
        </div>
        <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
          <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
          <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>  
    
    <!-- form section start  -->
    <div class="form-cont-row pad-top-bot-30" id="srch-form01">
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
    </section> <!-- slider section end  -->