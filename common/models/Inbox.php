<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "inbox".
 *
 * @property int $id
 * @property int $from_id
 * @property int $to_id
 * @property string $subject
 * @property string $description
 * @property int $type 1,Product Enquiry, 2 Post By requirement
 * @property int $category_id
 * @property int $subcategory_id
 * @property int $product_id
 * @property string $created_at
 * @property int $status 1 sent 2 viewed 3 replyed
 * @property string $view_at
 * @property int $parent_id
 *
 * @property Category $category
 * @property Users $from
 * @property Products $product
 * @property Subcategory $subcategory
 * @property Users $to
 */
class Inbox extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inbox';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['from_id', 'to_id', 'category_id', 'status'], 'required'],
            [['from_id', 'to_id', 'type', 'category_id', 'subcategory_id', 'product_id', 'status', 'parent_id'], 'integer'],
            [['description'], 'string'],
            [['created_at', 'view_at'], 'safe'],
            [['subject'], 'string', 'max' => 150],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['from_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['from_id' => 'id']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Products::className(), 'targetAttribute' => ['product_id' => 'id']],
            [['subcategory_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subcategory::className(), 'targetAttribute' => ['subcategory_id' => 'id']],
            [['to_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['to_id' => 'id']],
            [['subject', 'description'], 'required',
                 
                'whenClient' => "function (attribute, value) { 
        
                    if ($('#r12').prop('checked')) {
                        
                        return true;
                     } else {
                        return false;
                      }
                }"
            ],
            ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'from_id' => 'From ID',
            'to_id' => 'To ID',
            'subject' => 'Subject',
            'description' => 'Description',
            'type' => 'Type',
            'category_id' => 'Category ID',
            'subcategory_id' => 'Subcategory ID',
            'product_id' => 'Product ID',
            'created_at' => 'Created At',
            'status' => 'Status',
            'view_at' => 'View At',
            'parent_id' => 'Parent ID',
        ];
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
    public function getFrom()
    {
        return $this->hasOne(Users::className(), ['id' => 'from_id']);
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
    public function getSubcategory()
    {
        return $this->hasOne(Subcategory::className(), ['id' => 'subcategory_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTo()
    {
        return $this->hasOne(Users::className(), ['id' => 'to_id']);
    }

    /**
     * {@inheritdoc}
     * @return InboxQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new InboxQuery(get_called_class());
    }
}
