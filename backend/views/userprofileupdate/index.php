<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserProfileupdatesearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Profile Updates';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-profileupdate-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <!--<?//= Html::a('Create User Profileupdate', ['create'], ['class' => 'btn btn-success']) ?>-->
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'user_id',
            'firstname',
            //'lastname',
            'designiation',
            //'mobile',
            'emailid:email',
            'requested_at',
            //'approved_at',
            [
                'attribute' => 'status',
                'format'=>'raw',
                'value' => function($model){
                             if ($model->status == 1) {
                               return Html::tag('span','Approved', ['class'=>'spanstatus label label-success cust-label']);
                             }
                             else if ($model->status == 2) {
                                return Html::tag('span','Rejected', ['class'=>'spanstatus label label-danger cust-label']);
                             }
                             else {
                                return Html::tag('span','Pending', ['class'=>'spanstatus label label-warning cust-label']);
                             }
                           }
                        ],
            //'approved_by',

            ['class' => 'yii\grid\ActionColumn',
            'template' => '{approve_update} {reject_update}',
            'buttons'  => [
                'approve_update'   => function ($url, $model) {
                    if ($model->status == 0) {
                        return  Html::a('Approve & Update', ['updateprofile?id='.$model->id], ['class' => 'btn btn-success btn-xs', 'data-pjax' => 0]);
                    } else {
                        return false;
                    }
                },
                'reject_update'   => function ($url, $model) {
                    if ($model->status == 0) {
                        $url = Url::to(['rejectprofile', 'id' => $model->id]);
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
