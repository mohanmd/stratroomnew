<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success btn-outline-green']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
            'category_name',
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
          //  'delete_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
