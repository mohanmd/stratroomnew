<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Producervideo]].
 *
 * @see Producervideo
 */
class ProducervideoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Producervideo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Producervideo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
