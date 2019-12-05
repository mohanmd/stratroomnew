<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Products;

/**
 * ProductsSearch represents the model behind the search form of `app\models\Products`.
 */
class ProductsSearch extends Products
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'product_name', 'category_id', 'subcategory_id', 'created_by', 'delete_status', 'status', 'approved_by'], 'integer'],
            [['variety', 'description', 'specification', 'volume', 'harvesting_period', 'region_grown', 'processing', 'texture', 'flavour', 'organic', 'organic_certification', 'delievary_time', 'created_at', 'updated_at', 'approved_at', 'annual_volume', 'altitude'], 'safe'],
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
       // print_r($params);
    //    exit();
        $query = Products::find();

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
            'product_name' => $this->product_name,
            'category_id' => $this->category_id,
            'subcategory_id' => $this->subcategory_id,
            'created_by' => $this->created_by,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'delete_status' => $this->delete_status,
            'status' => $this->status,
            'approved_by' => $this->approved_by,
            'approved_at' => $this->approved_at,
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
            ->andFilterWhere(['like', 'organic', $this->organic])
            ->andFilterWhere(['like', 'organic_certification', $this->organic_certification])
            ->andFilterWhere(['like', 'delievary_time', $this->delievary_time])
            ->andFilterWhere(['like', 'annual_volume', $this->annual_volume])
            ->andFilterWhere(['like', 'altitude', $this->altitude]);

        return $dataProvider;
    }
}
