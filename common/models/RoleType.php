<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "role_type".
 *
 * @property int $id
 * @property int $type_name
 * @property int $role_id
 * @property int $delete_status 1 Deleted 
 *
 * @property Roles $role
 * @property Users[] $users
 */
class RoleType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'role_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type_name', 'role_id'], 'required'],
            [['type_name', 'role_id', 'delete_status'], 'integer'],
            [['role_id'], 'exist', 'skipOnError' => true, 'targetClass' => Roles::className(), 'targetAttribute' => ['role_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type_name' => 'Type Name',
            'role_id' => 'Role ID',
            'delete_status' => 'Delete Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRole()
    {
        return $this->hasOne(Roles::className(), ['id' => 'role_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(Users::className(), ['typeid' => 'id']);
    }
    public function getUsersactive()
    {
        return $this->hasMany(Users::className(), ['typeid' => 'id'])->andOnCondition(['delete_status' => 0]);
        ;
    }
    public function getUsersinactive()
    {
        return $this->hasMany(Users::className(), ['typeid' => 'id'])->andOnCondition(['delete_status' =>1]);
    }
    /**
     * {@inheritdoc}
     * @return RoleTypeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RoleTypeQuery(get_called_class());
    }
}
