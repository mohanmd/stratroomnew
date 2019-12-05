<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "producer_details".
 *
 * @property int $id
 * @property int $producer_id
 * @property string $founded_in
 * @property string $founded_since
 * @property string $producer_profile
 * @property string $fairtrade_impact
 * @property string $organization
 * @property string $service
 * @property int $faircertsince
 * @property int $no_of_farmers
 * @property string $org_background
 *
 * @property Users $producer
 */
class ProducerDetails extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'producer_details';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['producer_id', 'founded_in', 'founded_since', 'fairtrade_impact', 'organization', 'service', 'faircertsince', 'no_of_farmers','org_background','producer_profile'], 'required'],
            [['producer_id', 'faircertsince', 'no_of_farmers'], 'integer'],
            [['producer_profile'], 'file','extensions' => 'png, jpg'],

            [['fairtrade_impact'], 'string'],
            [['founded_in', 'founded_since', 'organization', 'service'], 'string', 'max' => 50],
            [['org_background'], 'string', 'max' => 150],
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
            'producer_id' => 'Producer ID',
            'founded_in' => 'Founded In',
            'founded_since' => 'Founded Since',
            'producer_profile' => 'Producer Profile',
            'fairtrade_impact' => 'Fairtrade Impact',
            'organization' => 'Organization',
            'service' => 'Service',
            'faircertsince' => 'Faircertsince',
            'no_of_farmers' => 'No Of Farmers',
            'org_background' => 'Org Background',
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
     * @return ProducerDetailsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProducerDetailsQuery(get_called_class());
    }
}
