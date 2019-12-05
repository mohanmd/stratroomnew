<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product_images".
 *
 * @property int $id
 * @property string $image_name
 * @property int $product_id
 * @property int $delete_status 0-active,1-deleted
 *
 * @property Products $product
 */
class ProductImages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_images';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image_name', 'product_id'], 'required'],
            [['product_id', 'delete_status'], 'integer'],
            [['image_name'], 'string', 'max' => 50],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Products::className(), 'targetAttribute' => ['product_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image_name' => 'Image Name',
            'product_id' => 'Product ID',
            'delete_status' => 'Delete Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Products::className(), ['id' => 'product_id']);
    }
}
