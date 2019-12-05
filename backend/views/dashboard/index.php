<?php
/* @var $this yii\web\View */
?>
<div class="main-cont">
<?php
foreach($roletypes as $roletype)
{
?>
<h1><?=$roletype->type_name ?></h1>
<div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">No of <?=$roletype->type_name?></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span><?=count($roletype->getUsers()->all())?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-arielle-smile">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Active</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span><?=count($roletype->getUsersactive()->all())?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-grow-early">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Inactive</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span><?=count($roletype->getUsersinactive()->all())?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                        <?php
}
                        ?>
<?php
if(1==2)
{
?>
<div class="row cust-card" id="prod-viewed"><!---Product viewed Row Start -->
<div class="col-md-8">
        <div class="main-card mb-3 ">
            <div class="card-body card1">
                <h5 class="card-title text-capt">Products Viewed</h5>
                    <canvas id="canvas"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="main-card mb-3 ">
            <div class="card-body card1">
                <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-secondary">Month</button>
                    <button type="button" class="btn btn-secondary">Week</button>
                    <button type="button" class="btn btn-secondary">Day</button>
                    <button type="button" class="btn btn-secondary">Expand</button>
                    <button type="button" class="btn btn-secondary">Filter by</button>
                </div>     
            </div>        
            <div class="text-right">
                <div class="drop-cust dropdown show">
                    <a class="btn btn-default cust-btn theme-color-bg color-white dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sorting
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Sorting</a>
                        <a class="dropdown-item" href="#">Sorting</a>
                        <a class="dropdown-item" href="#">Sorting </a>
                </div>
            </div>           
        </div>
        <div class="main-card mb-3 card">
                                           
        </div>
    </div>
</div><!---Product viewed Row End -->
</div>
<div class="row cust-card" id="enq-generated"><!---Enquiries generated Row End -->
    <div class="col-md-8">
        <div class="main-card mb-3 ">
            <div class="card-body card1">
                <h5 class="card-title text-capt">Enquiries Generated</h5>
                    <canvas id="chart-horiz-bar"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="main-card mb-3 ">
            <div class="card-body card1">
                <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-secondary">Month</button>
                    <button type="button" class="btn btn-secondary">Week</button>
                    <button type="button" class="btn btn-secondary">Day</button>
                    <button type="button" class="btn btn-secondary">Expand</button>
                    <button type="button" class="btn btn-secondary">Filter by</button>
                </div>     
            </div>        
            <div class="text-right">
                <div class="drop-cust dropdown show">
                    <a class="btn btn-default cust-btn theme-color-bg color-white dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sorting
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Sorting</a>
                        <a class="dropdown-item" href="#">Sorting</a>
                        <a class="dropdown-item" href="#">Sorting </a>
                </div>
            </div>           
        </div>
        <div class="main-card mb-3 card">
                                           
        </div>
    </div>
</div>
<?php
}
?>
</div>
