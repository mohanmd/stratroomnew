<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ProductUpdates;

/**
 * ProductUpdatesSearch represents the model behind the search form of `app\models\ProductUpdates`.
 */
class ProductUpdatesSearch extends ProductUpdates
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'product_id', 'user_id', 'approved_by', 'status'], 'integer'],
            [['variety', 'description', 'specification', 'volume', 'harvesting_period', 'region_grown', 'processing', 'texture', 'flavour', 'delievary_time', 'requested_at', 'approved_at'], 'safe'],
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
        $query = ProductUpdates::find();

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
            'product_id' => $this->product_id,
            'user_id' => $this->user_id,
            'requested_at' => $this->requested_at,
            'approved_at' => $this->approved_at,
            'approved_by' => $this->approved_by,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'variety', $this->variety])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'specification', $this->specification])
            ->andFilterWhere(['like', 'volume', $this->volume])
            ->andFilterWhere(['like', 'harvesting_period', $this->harvesting_period])
            ->andFilterWhere(['like', 'region_grown', $this->region_grown])
            ->andFilterWhere(['like', 'processing', $this->processing])
            ->andFilterWhere(['like', 'texture', $this->texture])
            ->andFilterWhere(['like', 'flavour', $this->flavour])
            ->andFilterWhere(['like', 'delievary_time', $this->delievary_time]);

        return $dataProvider;
    }
}
