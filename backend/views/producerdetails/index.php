<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProducerDetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Producer Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="producer-details-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Producer Details', ['create'], ['class' => 'btn btn-success btn-outline-green']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'producer_id',
            'founded_in',
            'founded_since',
            'producer_profile',
            //'fairtrade_impact:ntext',
            //'organization',
            //'service',
            //'faircertsince',
            //'no_of_farmers',
            //'org_background',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
