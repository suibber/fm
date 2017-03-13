<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[FarmLand]].
 *
 * @see FarmLand
 */
class FarmLandQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return FarmLand[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return FarmLand|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}