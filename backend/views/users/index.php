<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Users', ['create'], ['class' => 'btn btn-success btn-outline-green']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
            'firstname',
            'lastname',
            'username',
            'designation',
            'country.country_name',
            'email:email',
            'mobile',
            //'flocertid',
            //'password',
            //'roleid',
            //'typeid',
            //'created_at',
            //'updated_at',
            //'created_by',
            //'delete_status',
           // 'status',
            [
                'attribute' => 'status',
                'filter' => false,
                'format' => 'raw',
                 'value' => function ($model) {
                     return  $model->getStatus($model->status);
                 },
              ],
              
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            //'verification_token',

            ['class' => 'yii\grid\ActionColumn',
            'template' => '{view} {update} {delete} {myButton}',  
            'buttons' => [
                'myButton' => function($url, $model, $key) {  
                    if($model->status==1)
                    {
                        return  Html::a('<i class="fas fa-ban"></i>', ['users/deactivateuser?id='.$model->id], ['class' => 'deactive-icon cust-ico-btn', 'data-pjax' => 0, 'title' => 'Deactivate']);

                    }
                    else
                    {
                        return  Html::a('<i class="fas fa-power-off"></i>', ['users/activateuser?id='.$model->id], ['class' => 'active-icon cust-ico-btn', 'data-pjax' => 0, 'title' => 'Activate']);

                    }   
                }
            ]
],
        ],
    ]); ?>


</div>
