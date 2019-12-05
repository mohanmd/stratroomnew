<?= $this->render('myaccount-header'); ?>
<?php 
use yii\grid\GridView;
$this->title = "Sent Items";
?>
<h2>Sent Items</h2>
<div class="inbox-table">
                               
        <?= GridView::widget([
        'dataProvider' => $sentitemsdataprovider,
        'tableOptions' => ['class' => 'table table-product'],
        'columns' => [
            ['class' => 'yii\grid\CheckboxColumn','checkboxOptions' => ['class' => 'cus-chk-inpt']],

            [
                'header' => 'From',
                'attribute' => 'from_id',
                'value'     => 'from.firstname'
            ],
            [
                'header' => 'Subject',
                'attribute' => 'subject',
            ],
            [
                'header' => 'Product',
                'attribute' => 'product_id',
                'value'     => 'product.product_name'
            ],
            [
                'header' => 'Date',
                'attribute' => 'created_at',
            ],

            //['class' => 'yii\grid\ActionColumn','controller' => 'courts'],
        ],
    ]); ?>




</div> 
<?= $this->render('myaccount-footer'); ?>