<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "producerimage_types".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $delete_status
 *
 * @property Producerimage[] $producerimages
 */
class ProducerimageTypes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'producerimage_types';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'delete_status'], 'required'],
            [['delete_status'], 'integer'],
            [['name', 'description'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'delete_status' => 'Delete Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducerimages()
    {
        return $this->hasMany(Producerimage::className(), ['type_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return ProducerimageTypesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProducerimageTypesQuery(get_called_class());
    }
}
