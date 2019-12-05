<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductUpdatesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Product Updates';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-updates-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Product Updates', ['create'], ['class' => 'btn btn-success btn-outline-green']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'product_id'=>'product.product_name',
            'variety',
            'description:ntext',
            //'specification:ntext',
            //'volume',
            //'harvesting_period',
            //'region_grown',
            //'processing',
            //'texture',
            //'flavour',
            //'delievary_time',
            'user_id'=> 'user.username',
            //'requested_at',
            //'approved_at',
            //'approved_ by',
            [
                'attribute' => 'status',
                'format'=>'raw',
                'value' => function($model){
                             if ($model->status == 1) {
                               return Html::tag('span','Approved', ['class'=>'spanstatus label label-success']);
                             }
                             else if ($model->status == 2) {
                                return Html::tag('span','Rejected', ['class'=>'spanstatus label label-danger']);
                             }
                             else {
                                return Html::tag('span','Pending', ['class'=>'spanstatus label label-warning']);
                             }
                           }
                        ],

            ['class' => 'yii\grid\ActionColumn',
            'template' => '{approve_update} {reject_update}',
            'buttons'  => [
                'approve_update'   => function ($url, $model) {
                    if ($model->status == 0) {
                        return  Html::a('Approve & Update', ['updateproduct?id='.$model->id], ['class' => 'btn btn-success btn-xs', 'data-pjax' => 0]);
                    } else {
                        return false;
                    }
                },
                'reject_update'   => function ($url, $model) {
                    if ($model->status == 0) {
                        $url = Url::to(['rejectproduct', 'id' => $model->id]);
                        return  Html::a('Reject', $url, ['class' => 'btn btn-danger btn-xs', 'data-confirm' => Yii::t('yii', 'Are you sure you want to reject this Request ?'),
                        'data-method'  => 'post','data-pjax' => 0]);
                    }  else {
                        return false;
                    }
                }
                ]
        ],
        ],
    ]); ?>


</div>
