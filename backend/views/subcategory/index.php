<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SubcategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Subcategories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subcategory-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Subcategory', ['create'], ['class' => 'btn btn-success btn-outline-green']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'category.category_name',
            'subcategoryname',
            [
                'attribute'=>'image',
               'label'=>'Image',
               'format'=>'raw',
           
                'value' => function ($data) {
                       $url = Url::base(true)."/".$data->image;
                       return Html::img($url, ['alt'=>'myImage','width'=>'70','height'=>'50']);
                }
            ],
            'description:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
