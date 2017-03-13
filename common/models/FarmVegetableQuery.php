<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[FarmVegetable]].
 *
 * @see FarmVegetable
 */
class FarmVegetableQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return FarmVegetable[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return FarmVegetable|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}