<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "producerimage".
 *
 * @property int $id
 * @property int $type_id
 * @property string $caption
 * @property string $image_name
 * @property int $producer_id
 * @property int $delete_status 1 deleted
 * @property int $status 0 pending 1 approved 2 rejected
 *
 * @property Products $producer
 * @property ProducerimageTypes $type
 */
class Producerimage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'producerimage';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type_id', 'caption', 'image_name', 'producer_id' ], 'required'],
            [['type_id', 'producer_id', 'delete_status', 'status'], 'integer'],
            [['caption'], 'string', 'max' => 50],
            [['image_name'], 'file','extensions' => 'jpg, png','maxFiles' => 5],
            [['producer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['producer_id' => 'id']],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProducerimageTypes::className(), 'targetAttribute' => ['type_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type_id' => 'Image Type',
            'caption' => 'Caption',
            'image_name' => 'Images',
            'producer_id' => 'Producer ID',
            'delete_status' => 'Delete Status',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducer()
    {
        return $this->hasOne(Users::className(), ['id' => 'producer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(ProducerimageTypes::className(), ['id' => 'type_id']);
    }

    /**
     * {@inheritdoc}
     * @return ProducerimageQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProducerimageQuery(get_called_class());
    }
}
