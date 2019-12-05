<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Producervideo;

/**
 * Producervideosearch represents the model behind the search form of `app\models\Producervideo`.
 */
class Producervideosearch extends Producervideo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'video_url', 'producer_id', 'delete_status', 'status'], 'integer'],
            [['caption'], 'safe'],
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
        $query = Producervideo::find();

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
            'video_url' => $this->video_url,
            'producer_id' => $this->producer_id,
            'delete_status' => $this->delete_status,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'caption', $this->caption]);

        return $dataProvider;
    }
}
