<?= $this->render('myaccount-header'); ?>
<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
		 //  'productimage.name',
            'product_name',
			'description:ntext',
            'category.category_name',
            'subcategory.subcategoryname',
            'variety',
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

                  [
          'class' => 'yii\grid\ActionColumn',
          'header' => 'Actions',
          'headerOptions' => ['style' => 'color:#337ab7'],
          'template' => '{viewproduct}{updateproduct}{deleteproduct}',
          'buttons' => [
            'viewproduct' => function ($url, $model) {
                return Html::a('<span  aria-hidden="true" class="fa fa-eye"></span>', $url, [
                            'title' => Yii::t('app', 'product-view'),
							'class' =>'progridact',
                ]);
            },

            'updateproduct' => function ($url, $model) {
                return Html::a('<span aria-hidden="true" class="fa fa-pencil"></span>', $url, [
                            'title' => Yii::t('app', 'product-update'),
							'class' =>'progridact',
                ]);
            },
            'deleteproduct' => function ($url, $model) {
                return Html::a('<span  aria-hidden="true" class="fa fa-trash"></span>', $url, [
                            'title' => Yii::t('app', 'product-delete'),
							'class' =>'progridact',
                ]);
            }

          ]
          ],

        ],
    ]); ?>


</div>

 <?= $this->render('myaccount-footer'); ?>