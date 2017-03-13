<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[FarmLandVegetable]].
 *
 * @see FarmLandVegetable
 */
class FarmLandVegetableQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return FarmLandVegetable[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return FarmLandVegetable|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}