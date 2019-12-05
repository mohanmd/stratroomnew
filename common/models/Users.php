<?php

namespace common\models;

use Yii;
/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $username
 * @property string $designation
 * @property int $country_id
 * @property string $email
 * @property int $mobile
 * @property string $flocertid
 * @property string $password
 * @property int $roleid
 * @property int $typeid
 * @property int $created_at
 * @property int $updated_at
 * @property int $created_by store who creates the account
 * @property int $delete_status 1 Deleted
 * @property int $status 0 waiting for approvel1 approved 2 rejected 
 * @property string $auth_key
 * @property string $password_hash
 * @property int $password_reset_token
 * @property string $verification_token
 *
 * @property Inbox[] $inboxes
 * @property Inbox[] $inboxes0
 * @property ProducerDetails[] $producerDetails
 * @property Producervideo[] $producervideos
 * @property ProductUpdates[] $productUpdates
 * @property ProductUpdates[] $productUpdates0
 * @property Products[] $products
 * @property Products[] $products0
 * @property Products[] $products1
 * @property UserProfileupdate[] $userProfileupdates
 * @property UserProfileupdate[] $userProfileupdates0
 * @property Countries $country
 * @property Roles $role
 * @property RoleType $type
 */
class Users extends \yii\db\ActiveRecord
{

    const SCENARIO_UPDATE = 'update_profile';

    public $password_repeat;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'username', 'designation', 'country_id', 'mobile' ,'email', 'password','typeid'], 'required','on' => self::SCENARIO_DEFAULT],
            [['firstname', 'lastname', 'username', 'designation', 'country_id', 'mobile' ,'email','typeid'], 'required','on' => self::SCENARIO_UPDATE],
            [['country_id', 'mobile', 'roleid', 'typeid', 'created_at', 'updated_at', 'created_by', 'delete_status', 'status', 'password_reset_token'], 'integer'],
            [['firstname', 'lastname', 'designation', 'flocertid'], 'string', 'max' => 30],
            [['username', 'password_hash', 'verification_token'], 'string', 'max' => 255],
            [['email', 'password'], 'string', 'max' => 50],
            ['email', 'email'],
            [['auth_key'], 'string', 'max' => 32],
            [['email'], 'unique'],
            [['username'], 'unique'],
            [['mobile'], 'unique'],
            [['flocertid'], 'unique'],
           // [['mobile'],'number', 'min'=>10,'max'=>11],
            [['country_id'], 'exist', 'skipOnError' => true, 'targetClass' => Countries::className(), 'targetAttribute' => ['country_id' => 'id']],
            [['roleid'], 'exist', 'skipOnError' => true, 'targetClass' => Roles::className(), 'targetAttribute' => ['roleid' => 'id']],
            [['typeid'], 'exist', 'skipOnError' => true, 'targetClass' => RoleType::className(), 'targetAttribute' => ['typeid' => 'id']],
            [
                'flocertid', 
                'required', 
                'when' => function ($model) {
                    $array = array(1,2,3,4,5,6); 
                    return in_array($model->typeid,$array); 
                }, 
                'whenClient' => "function (attribute, value) { 
                    var user_id = $('#users-typeid').val();
  
                    var ft = ['1','2','3','4','5','6'];

                    if (ft.includes(user_id)) {
                        return true;
                      } else {
                        return false;
                      }

                }"
            ],
            ['password_repeat', 'required','on' => self::SCENARIO_DEFAULT],
            ['password_repeat', 'compare', 'compareAttribute'=>'password', 'message'=>"Passwords don't match" ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'username' => 'Username',
            'designation' => 'Designation',
            'country_id' => 'Country Name',
            'email' => 'Email',
            'mobile' => 'Mobile',
            'flocertid' => 'Flocertid',
            'password' => 'Password',
            'roleid' => 'Role',
            'typeid' => 'Type',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'delete_status' => 'Delete Status',
            'status' => 'Status',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'verification_token' => 'Verification Token',
            'password_repeat' => 'Confirm Password',
            'termsandconditions' => 'Yes, I agree to all the Terms of use started here in',
            'privacy_policy' => 'Yes, I accept the privacy policy'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInboxes()
    {
        return $this->hasMany(Inbox::className(), ['from_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInboxes0()
    {
        return $this->hasMany(Inbox::className(), ['to_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducerDetails()
    {
        return $this->hasMany(ProducerDetails::className(), ['producer_id' => 'id']);
    }
    public function getStatus($status)
    {
        switch ($status) {
           case 0:
               return "<span class='label label-info'>Pending</span>";
               break;
           case 1:
           return "<span class='label label-success'>Active</span>";
           break;
           case 2:
           return "<span class='label label-danger'>Inactive</span>";
           break;
       }
       
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducervideos()
    {
        return $this->hasMany(Producervideo::className(), ['producer_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductUpdates()
    {
        return $this->hasMany(ProductUpdates::className(), ['approved_ by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductUpdates0()
    {
        return $this->hasMany(ProductUpdates::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['approved_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts0()
    {
        return $this->hasMany(Products::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts1()
    {
        return $this->hasMany(Products::className(), ['subcategory_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserProfileupdates()
    {
        return $this->hasMany(UserProfileupdate::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserProfileupdates0()
    {
        return $this->hasMany(UserProfileupdate::className(), ['approved_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Countries::className(), ['id' => 'country_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRole()
    {
        return $this->hasOne(Roles::className(), ['id' => 'roleid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(RoleType::className(), ['id' => 'typeid']);
    }

    /**
     * {@inheritdoc}
     * @return UsersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UsersQuery(get_called_class());
    }
}
