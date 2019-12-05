<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "producervideo".
 *
 * @property int $id
 * @property string $caption
 * @property int $video_url
 * @property int $producer_id
 * @property int $delete_status 1 deleted
 * @property int $status 0 pending 1 approved 2 rejected
 *
 * @property Users $producer
 */
class Producervideo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'producervideo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['caption', 'video_url', 'producer_id'], 'required'],
            [['producer_id', 'delete_status', 'status'], 'integer'],
            [['caption'], 'string', 'max' => 50],
            [['video_url'], 'string', 'max' => 255],
            [['producer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['producer_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'caption' => 'Caption',
            'video_url' => 'Video Url',
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
     * {@inheritdoc}
     * @return ProducervideoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProducervideoQuery(get_called_class());
    }
}
