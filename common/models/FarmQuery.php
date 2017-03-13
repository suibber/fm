<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[FarmLandMessage]].
 *
 * @see FarmLandMessage
 */
class FarmQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return FarmLandMessage[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return FarmLandMessage|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}