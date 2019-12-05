<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Producers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Producers', ['createproducer'], ['class' => 'btn btn-success btn-outline-green']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'firstname',
            'lastname',
          //  'username',
            'designation',
            'flocertid',
            'country.country_name',
        'email:email',
            'mobile',
      
            //'password',
            //'roleid',
            //'typeid',
            //'created_at',
            //'updated_at',
            //'created_by',
            //'delete_status',
            //'status',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            //'verification_token',

            ['class' => 'yii\grid\ActionColumn'
            ,'template' => '{producerView} {producerUpdate} {producerDelete} {myButton}',
            'buttons'  => [
                'producerView'   => function ($url, $model) {
                    $url = Url::to(['users/viewproducer', 'id' => $model->id]);
                    return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, ['title' => 'view']);
                },
                'producerUpdate' => function ($url, $model) {
                    $url = Url::to(['users/updateproducer', 'id' => $model->id]);
                    return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, ['title' => 'update']);
                },
                'producerDelete' => function ($url, $model) {
                    $url = Url::to(['users/deleteproducer', 'id' => $model->id]);
                    return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                        'title'        => 'delete',
                        'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                        'data-method'  => 'post',
                    ]);
                },'myButton' => function($url, $model, $key) {  
                    if($model->status==1)
                    {
                        return  Html::a('<i class="fas fa-ban"></i>', ['users/deactivateproducer?id='.$model->id], ['class' => 'deactive-icon cust-ico-btn', 'data-pjax' => 0, 'title' => 'Deactivate']);

                    }
                    else
                    {
                        return  Html::a('<i class="fas fa-power-off"></i>', ['users/activateproducer?id='.$model->id], ['class' => 'active-icon cust-ico-btn', 'data-pjax' => 0, 'title' => 'Activate']);

                    }   
                }
            ],],
        ],
    ]); ?>


</div>
