<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $product_name
 * @property int $category_id
 * @property int $subcategory_id
 * @property string $variety
 * @property string $description
 * @property string $specification
 * @property string $volume
 * @property string $harvesting_period
 * @property string $region_grown
 * @property string $processing
 * @property string $texture
 * @property string $flavour
 * @property string $organic
 * @property string $organic_certification
 * @property string $delievary_time
 * @property int $created_by
 * @property string $created_at
 * @property string $updated_at
 * @property int $delete_status 1 deleted
 * @property int $status 0 pending 1 approved 2 rejected
 * @property int $approved_by
 * @property string $approved_at
 * @property string $annual_volume
 * @property string $altitude
 * @property string $image_name
 *
 * @property Inbox[] $inboxes
 * @property Producerimage[] $producerimages
 * @property ProductUpdates[] $productUpdates
 * @property Users $approvedBy
 * @property Category $category
 * @property Users $createdBy
 * @property Subcategory $subcategory
 */
class Products extends \yii\db\ActiveRecord
{
    CONST status=array(0 =>"Pending",1 =>"Approved", 2 =>"Disapproved");
    /**
     * {@inheritdoc}
     */
    public $image_name;
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_name', 'category_id', 'variety', 'description', 'specification', 'volume', 'harvesting_period', 'delievary_time', 'created_by'], 'required'],
            [['category_id', 'subcategory_id', 'created_by', 'delete_status', 'status', 'approved_by'], 'integer'],
            [['description', 'specification'], 'string'],
            [['created_at', 'updated_at', 'approved_at'], 'safe'],
            [['product_name'], 'string', 'max' => 255],
            [['variety'], 'string', 'max' => 50],
            [['image_name'], 'file','extensions' => 'jpg, png, jpeg','maxFiles' => 5],

            [['volume', 'delievary_time'], 'string', 'max' => 100],
            [['harvesting_period', 'region_grown', 'processing', 'texture', 'flavour', 'organic', 'organic_certification', 'annual_volume', 'altitude'], 'string', 'max' => 150],
            [['approved_by'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['approved_by' => 'id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['created_by' => 'id']],
            [['subcategory_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subcategory::className(), 'targetAttribute' => ['subcategory_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_name' => 'Product Name',
            'category_id' => 'Category Name',
            'subcategory_id' => 'Subcategory Name',
            'variety' => 'Variety',
            'description' => 'Description',
            'specification' => 'Specification',
            'volume' => 'Volume',
            'harvesting_period' => 'Harvesting Period',
            'region_grown' => 'Region Grown',
            'processing' => 'Processing',
            'texture' => 'Texture',
            'flavour' => 'Flavour',
            'organic' => 'Organic',
            'organic_certification' => 'Organic Certification',
            'delievary_time' => 'Delievary Time',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'delete_status' => 'Delete Status',
            'status' => 'Status',
            'approved_by' => 'Approved By',
            'approved_at' => 'Approved At',
            'annual_volume' => 'Annual Volume',
            'altitude' => 'Altitude',
            'image_name'=>'Product Images'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInboxes()
    {
        return $this->hasMany(Inbox::className(), ['product_id' => 'id']);
    }
    public function getStatus()
    {
        
        return self::status[$this->status];
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducerimages()
    {
        return $this->hasMany(Producerimage::className(), ['producer_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductUpdates()
    {
        return $this->hasMany(ProductUpdates::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApprovedBy()
    {
        return $this->hasOne(Users::className(), ['id' => 'approved_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(Users::className(), ['id' => 'created_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubcategory()
    {
        return $this->hasOne(Subcategory::className(), ['id' => 'subcategory_id']);
    }

    public function getProductimage()
    {
        return $this->hasOne(ProductImages::className(), ['product_id' => 'id']);
    }
}
