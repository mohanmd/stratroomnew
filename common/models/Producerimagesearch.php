<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Producerimage;

/**
 * Producerimagesearch represents the model behind the search form of `app\models\Producerimage`.
 */
class Producerimagesearch extends Producerimage
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'type_id', 'producer_id', 'delete_status', 'status'], 'integer'],
            [['caption', 'image_name'], 'safe'],
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
        $query = Producerimage::find();

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
            'type_id' => $this->type_id,
            'producer_id' => $this->producer_id,
            'delete_status' => $this->delete_status,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'caption', $this->caption])
            ->andFilterWhere(['like', 'image_name', $this->image_name]);

        return $dataProvider;
    }
}
