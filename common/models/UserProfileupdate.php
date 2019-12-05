<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_profileupdate".
 *
 * @property int $id
 * @property int $user_id
 * @property string $firstname
 * @property string $lastname
 * @property string $designiation
 * @property int $mobile
 * @property string $emailid
 * @property string $requested_at
 * @property string $approved_at
 * @property int $status 0 pending 1 approved 2 rejected
 * @property int $approved_by
 *
 * @property Users $user
 * @property Users $approvedBy
 */
class UserProfileupdate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_profileupdate';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'],'required'],
            [['user_id', 'mobile', 'status', 'approved_by'], 'integer'],
            [['requested_at', 'approved_at'], 'safe'],
            [['firstname', 'lastname', 'designiation', 'emailid','password'], 'string', 'max' => 150],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['approved_by'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['approved_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'designiation' => 'Designiation',
            'mobile' => 'Mobile',
            'emailid' => 'Emailid',
            'password' => 'password',
            'requested_at' => 'Requested At',
            'approved_at' => 'Approved At',
            'status' => 'Status',
            'approved_by' => 'Approved By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApprovedBy()
    {
        return $this->hasOne(Users::className(), ['id' => 'approved_by']);
    }

    /**
     * {@inheritdoc}
     * @return UserProfileupdateQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UserProfileupdateQuery(get_called_class());
    }
}
