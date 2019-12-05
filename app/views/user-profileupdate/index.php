<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserProfileupdateSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Profileupdates';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-profileupdate-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create User Profileupdate', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'firstname',
            'lastname',
            'designiation',
            //'mobile',
            //'emailid:email',
            //'password',
            //'requested_at',
            //'approved_at',
            //'status',
            //'approved_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
