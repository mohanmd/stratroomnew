<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RoleTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Role Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="role-type-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Role Type', ['create'], ['class' => 'btn btn-success btn-outline-green']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'type_name',
            'role_id',
            'delete_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
