<?= $this->render('myaccount-header'); ?>
<?php 
use yii\grid\GridView;
$this->title = "Inbox";
?>
<h2>Inbox</h2>

<div class="inbox-table">
                                <!-- <div class="in-pg-hed">
                                    <h1>Inbox</h1>
                                </div>
                                <table class="table-product table" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Select</th>
                                            <th>From</th>
                                            <th style="width: 43%;">Subject</th>
                                            <th>Product</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="selected">
                                            <td class="text-center">
                                                <input type="checkbox" value="" class="cus-chk-inpt"> 
                                            <td>test@gmail.com</td>
                                            <td>New enquiry from fairtrade B2B website sales enquiry for Rice</td>
                                            <td>Rice</td>
                                            <td class="date-td">2019-11-07 / 06:10:05</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <input type="checkbox" value="" class="cus-chk-inpt"> 
                                            </td>
                                            <td>test@gmail.com</td>
                                            <td>New enquiry from fairtrade B2B website sales enquiry for Rice</td>
                                            <td>Rice</td>
                                            <td class="date-td">2019-11-07 / 06:10:05</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <input type="checkbox" value="" class="cus-chk-inpt"> 
                                            </td>
                                            <td>test@gmail.com</td>
                                            <td>New enquiry from fairtrade B2B website sales enquiry for Rice</td>
                                            <td>Rice</td>
                                            <td class="date-td">2019-10-07 / 10:10:05</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <input type="checkbox" value="" class="cus-chk-inpt"> 
                                            </td>
                                            <td>test@gmail.com</td>
                                            <td>New enquiry from fairtrade B2B website sales enquiry for Rice</td>
                                            <td>Rice</td>
                                            <td class="date-td">2019-11-17 / 08:10:05</td>
                                        </tr>
                                    </tbody>
                                </table>   -->

        <?= GridView::widget([
        'dataProvider' => $inboxdataprovider,
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