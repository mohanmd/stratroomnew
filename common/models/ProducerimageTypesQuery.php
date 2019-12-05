<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[ProducerimageTypes]].
 *
 * @see ProducerimageTypes
 */
class ProducerimageTypesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return ProducerimageTypes[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return ProducerimageTypes|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
