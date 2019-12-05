<?= $this->render('myaccount-header'); ?>
<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use yii\helpers\Url;
$url = Url::base();

/* @var $this yii\web\View */
/* @var $model app\models\Products */

$this->title = $model->product_name;
//$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
//\yii\web\YiiAsset::register($this);
?>
<div class="products-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
	        <?= Html::a('Back', ['manageproduct'], ['class' => 'btn btn-primary']) ?>

        <?= Html::a('Update', ['updateproduct', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['deleteproduct', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
     //       'id',
            'product_name',
            'category.category_name',
            'subcategory.subcategoryname',
            'variety',
            'description:ntext',
            'specification:ntext',
            'volume',
            'harvesting_period',
            'region_grown',
            'processing',
            'texture',
            'flavour',
            'organic',
            'organic_certification',
            'delievary_time',
           // 'created_by',
           // 'created_at',
          //  'updated_at',
          //  'delete_status',
            'status',
          //  'approved_by',
          //  'approved_at',
            'annual_volume',
            'altitude',
        ],
    ]) ?>

</div>

<div class="image_container">
<div class="row">
                                <?php
                                $i=0;
                                    foreach ($images as $img) {
                                ?>

                                
                                    <div class="col-md-3">
                                        <div>
                                        <a href="<?= $url.'/myaccount/removeproductimage?id='.$img->id ?>&product_id=<?= $model->id ?>">Remove</a>
                                            <img src="<?= $url.'/'.$img->image_name ?>" width="100%">
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                    if($i % 4 == 0) echo '</div><div class="row">';
                                    }
                                    ?>
                                </div>
</div>

 <?= $this->render('myaccount-footer'); ?>