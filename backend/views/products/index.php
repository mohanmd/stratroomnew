<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Products', ['create'], ['class' => 'btn btn-success btn-outline-green']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

        //    'id',
            'product_name',
             [
                'label' => 'Organization Name',
                'value' => function ($model) {
                    
                 if($data=$model->getCreatedBy()->one()->getProducerDetails()->one())
                    {
                        return $data->organization;
                    }
                }
              ],
            'category.category_name',
            'subcategory.subcategoryname',
            'createdBy.flocertid',
            'createdBy.email',

            //'description:ntext',
            //'specification:ntext',
            //'volume',
            //'harvesting_period',
            //'region_grown',
            //'processing',
            //'texture',
            //'flavour',
            //'organic',
            //'organic_certification',
            //'delievary_time',
            //'created_by',
            //'created_at',
            //'updated_at',
            //'delete_status',
            //'status',
            //'approved_by',
            //'approved_at',
            //'annual_volume',
            //'altitude',

            ['class' => 'yii\grid\ActionColumn',
            'template' => '{view} {delete} {myButton}',  
            'buttons' => [
                'myButton' => function($url, $model, $key) {  
                    if($model->status==1)
                    {
                        return  Html::a('<i class="fas fa-thumbs-down"></i>', ['products/disapproveproduct?id='.$model->id], ['class' => ' btn-cust-disapr btn-xs', 'data-pjax' => 0,'title' => 'Disapprove']);

                    }
                    else
                    {
                        return  Html::a('<i class="fas fa-thumbs-up"></i>', ['products/approveproduct?id='.$model->id], ['class' => ' btn-cust-apr btn-xs', 'data-pjax' => 0,'title' => 'Aprove']);

                    }   
                }
            ]
],
        ],
    ]); ?>


</div>
