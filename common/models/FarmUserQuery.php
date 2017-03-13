<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[FarmUser]].
 *
 * @see FarmUser
 */
class FarmUserQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return FarmUser[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return FarmUser|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}