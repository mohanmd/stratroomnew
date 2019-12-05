<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[RoleType]].
 *
 * @see RoleType
 */
class RoleTypeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return RoleType[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return RoleType|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
