<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product_updates".
 *
 * @property int $id
 * @property int $product_id
 * @property string $variety
 * @property string $description
 * @property string $specification
 * @property string $volume
 * @property string $harvesting_period
 * @property string $region_grown
 * @property string $processing
 * @property string $texture
 * @property string $flavour
 * @property string $delievary_time
 * @property int $user_id
 * @property string $requested_at
 * @property string $approved_at
 * @property int $approved_ by
 * @property int $status 0 pending 1 approved 2 rejected
 *
 * @property Users $approvedBy
 * @property Products $product
 * @property Users $user
 */
class ProductUpdates extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_updates';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'user_id'], 'required'],
            [['product_id', 'user_id', 'approved_by', 'status'], 'integer'],
            [['description', 'specification'], 'string'],
            [['requested_at', 'approved_at'], 'safe'],
            [['variety', 'volume', 'harvesting_period', 'region_grown', 'processing', 'texture', 'flavour', 'delievary_time','annual_volume', 'altitude'], 'string', 'max' => 150],
            [['approved_by'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['approved_by' => 'id']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Products::className(), 'targetAttribute' => ['product_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'variety' => 'Variety',
            'description' => 'Description',
            'specification' => 'Specification',
            'volume' => 'Volume',
            'harvesting_period' => 'Harvesting Period',
            'region_grown' => 'Region Grown',
            'processing' => 'Processing',
            'texture' => 'Texture',
            'flavour' => 'Flavour',
            'delievary_time' => 'Delievary Time',
            'user_id' => 'User ID',
            'requested_at' => 'Requested At',
            'approved_at' => 'Approved At',
            'approved_by' => 'Approved By',
            'status' => 'Status',
            'annual_volume' => 'Annual Volume',
            'altitude' => 'Altitude'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApprovedBy()
    {
        return $this->hasOne(Users::className(), ['id' => 'approved_ by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Products::className(), ['id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'user_id']);
    }

    /**
     * {@inheritdoc}
     * @return ProductUpdatesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProductUpdatesQuery(get_called_class());
    }
}
