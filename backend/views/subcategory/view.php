<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Subcategory */

$this->title = $model->subcategoryname;
$this->params['breadcrumbs'][] = ['label' => 'Subcategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="subcategory-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary cust-upt']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger cust-delete',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'subcategoryname',
            [
                'attribute'=>'image',
               'label'=>'Image',
               'format'=>'raw',
           
                'value' => function ($data) {
                       $url = Url::base(true)."/".$data->image;
                       return Html::img($url, ['alt'=>'myImage','width'=>'70','height'=>'50']);
                }
            ],
            'description:ntext',
            'category.category_name',
        ],
    ]) ?>

</div>
