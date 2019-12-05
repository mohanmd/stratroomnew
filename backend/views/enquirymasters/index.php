<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Enquirymasterssearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Enquirymasters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enquirymasters-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Enquirymasters', ['create'], ['class' => 'btn btn-success btn-outline-green']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'subject',
            'description:ntext',
            'delete_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
