<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "farm_item".
 *
 * @property integer $id
 * @property integer $display_order
 * @property integer $store_num
 * @property integer $sold_num
 * @property integer $real_price
 * @property integer $sale_price
 * @property string $title
 * @property string $content
 * @property string $icon
 */
class FarmItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'farm_item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['display_order', 'store_num', 'sold_num', 'real_price', 'sale_price'], 'integer'],
            [['content'], 'string'],
            [['title', 'icon'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'display_order' => 'Display Order',
            'store_num' => 'Store Num',
            'sold_num' => 'Sold Num',
            'real_price' => 'Real Price',
            'sale_price' => 'Sale Price',
            'title' => 'Title',
            'content' => 'Content',
            'icon' => 'Icon',
        ];
    }

    /**
     * @inheritdoc
     * @return FarmItemQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FarmItemQuery(get_called_class());
    }

    public static function getFarmItems($page)
    {
        $articles = self::find()  
            ->offset(($page[1]-1)*$page[0])
            ->limit($page[0])         
            ->orderBy(['display_order' => SORT_DESC])
            ->all();
        return $articles;
    }

    public static function getFarmItemsTotlePage() 
    { 
        $count = self::find() 
            ->count(); 
        $page = ceil( $count/Yii::$app->params['perPage'] ); 
        return $page; 
    }
}
