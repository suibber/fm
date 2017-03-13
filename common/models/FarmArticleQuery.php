<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[FarmArticle]].
 *
 * @see FarmArticle
 */
class FarmArticleQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return FarmArticle[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return FarmArticle|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}