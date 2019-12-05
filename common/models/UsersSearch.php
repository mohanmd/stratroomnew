<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Users;

/**
 * UsersSearch represents the model behind the search form of `app\models\Users`.
 */
class UsersSearch extends Users
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'country_id', 'mobile', 'roleid', 'typeid', 'created_at', 'updated_at', 'created_by', 'delete_status', 'status', 'password_reset_token'], 'integer'],
            [['firstname', 'lastname', 'username', 'designation', 'email', 'flocertid', 'password', 'auth_key', 'password_hash', 'verification_token'], 'safe'],
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
        $query = Users::find();

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
            'country_id' => $this->country_id,
            'mobile' => $this->mobile,
            'roleid' => $this->roleid,
            'typeid' => $this->typeid,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'delete_status' => $this->delete_status,
            'status' => $this->status,
            'password_reset_token' => $this->password_reset_token,
        ]);

        $query->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'designation', $this->designation])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'flocertid', $this->flocertid])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'password_hash', $this->password_hash])
            ->andFilterWhere(['like', 'verification_token', $this->verification_token]);

        return $dataProvider;
    }
	  public function notuserroles()
    {
        return array(1,2);
    }
    public function inuserroles()
    {
        return array(3);
    }

}
