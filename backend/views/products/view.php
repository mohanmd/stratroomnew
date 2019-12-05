<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Products */

$this->title = $model->product_name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

use yii\helpers\Url;
// backend config/main.php
$url = Yii::$app->urlManagerFrontEnd->baseUrl;

?>
<div class="products-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary cust-upt']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], ['class' => 'btn btn-danger cust-delete',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
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
            'createdBy.firstname',
            'created_at',
           // 'updated_at',
          //  'delete_status',
          [
            'attribute' => 'status',
             'value' => function ($model) {
                 //return "xxx";
                return  $model->getStatus();
             },
          ],
           // 'approved_by',
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
