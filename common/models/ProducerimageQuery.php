<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Producerimage]].
 *
 * @see Producerimage
 */
class ProducerimageQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Producerimage[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Producerimage|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
