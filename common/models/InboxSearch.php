<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Inbox;

/**
 * InboxSearch represents the model behind the search form of `app\models\Inbox`.
 */
class InboxSearch extends Inbox
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'from_id', 'to_id', 'type', 'category_id', 'subcategory_id', 'product_id', 'status', 'parent_id'], 'integer'],
            [['subject', 'description', 'created_at', 'view_at'], 'safe'],
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
        $query = Inbox::find();

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
            'from_id' => $this->from_id,
            'to_id' => $this->to_id,
            'type' => $this->type,
            'category_id' => $this->category_id,
            'subcategory_id' => $this->subcategory_id,
            'product_id' => $this->product_id,
            'created_at' => $this->created_at,
            'status' => $this->status,
            'view_at' => $this->view_at,
            'parent_id' => $this->parent_id,
        ]);

        $query->andFilterWhere(['like', 'subject', $this->subject])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
