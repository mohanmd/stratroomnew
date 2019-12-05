<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InboxSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Product Enquiries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inbox-index">

    <h1><?= Html::encode($this->title) ?></h1>



    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'header' => 'From',
                'attribute' => 'from_id',
                'value'     => 'from.firstname'
            ],
            [
                'header' => 'To',
                'attribute' => 'to_id',
                'value'     => 'to.firstname'
            ],
            'subject',
            'description:ntext',
            //'type',
            //'category_id',
            //'subcategory_id',
            //'product_id',
            //'created_at',
            //'status',
            //'view_at',
            //'parent_id',

//['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
