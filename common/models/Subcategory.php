<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "subcategory".
 *
 * @property int $id
 * @property string $subcategoryname
 * @property string $image
 * @property string $description
 * @property int $category_id
 *
 * @property Inbox[] $inboxes
 * @property Category $category
 */
class Subcategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subcategory';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subcategoryname', 'category_id'], 'required'],
            [['description'], 'string'],
            [['category_id'], 'integer'],
            [['image'], 'file','extensions' => 'png, jpg'],
            [['subcategoryname'], 'string', 'max' => 50],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'subcategoryname' => 'Subcategory Name',
            'image' => 'Image',
            'description' => 'Description',
            'category_id' => 'Category Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInboxes()
    {
        return $this->hasMany(Inbox::className(), ['subcategory_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * {@inheritdoc}
     * @return SubcategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SubcategoryQuery(get_called_class());
    }
}
