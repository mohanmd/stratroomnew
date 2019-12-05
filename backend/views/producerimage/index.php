<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Producerimagesearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Producerimages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="producerimage-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Producerimage', ['create'], ['class' => 'btn btn-success btn-outline-green']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'type_id',
            'caption',
            'image_name',
            'producer_id',
            //'delete_status',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
