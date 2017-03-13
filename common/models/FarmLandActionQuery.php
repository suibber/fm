<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[FarmLandAction]].
 *
 * @see FarmLandAction
 */
class FarmLandActionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return FarmLandAction[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return FarmLandAction|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}