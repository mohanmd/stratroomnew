<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "enquirymasters".
 *
 * @property int $id
 * @property string $subject
 * @property string $description
 * @property int $delete_status 1 deleted
 */
class Enquirymasters extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'enquirymasters';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subject', 'description', 'delete_status'], 'required'],
            [['description'], 'string'],
            [['delete_status'], 'integer'],
            [['subject'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'subject' => 'Subject',
            'description' => 'Description',
            'delete_status' => 'Delete Status',
        ];
    }

    /**
     * {@inheritdoc}
     * @return EnquirymastersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EnquirymastersQuery(get_called_class());
    }
}
