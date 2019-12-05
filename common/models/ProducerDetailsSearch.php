<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ProducerDetails;

/**
 * ProducerDetailsSearch represents the model behind the search form of `app\models\ProducerDetails`.
 */
class ProducerDetailsSearch extends ProducerDetails
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'producer_id', 'faircertsince', 'no_of_farmers'], 'integer'],
            [['founded_in', 'founded_since', 'producer_profile', 'fairtrade_impact', 'organization', 'service', 'org_background'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ProducerDetails::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'producer_id' => $this->producer_id,
            'faircertsince' => $this->faircertsince,
            'no_of_farmers' => $this->no_of_farmers,
        ]);

        $query->andFilterWhere(['like', 'founded_in', $this->founded_in])
            ->andFilterWhere(['like', 'founded_since', $this->founded_since])
            ->andFilterWhere(['like', 'producer_profile', $this->producer_profile])
            ->andFilterWhere(['like', 'fairtrade_impact', $this->fairtrade_impact])
            ->andFilterWhere(['like', 'organization', $this->organization])
            ->andFilterWhere(['like', 'service', $this->service])
            ->andFilterWhere(['like', 'org_background', $this->org_background]);

        return $dataProvider;
    }
}
