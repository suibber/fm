<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%land}}".
 *
 * @property integer $id
 * @property integer $type
 * @property integer $status
 * @property integer $owner
 * @property integer $is_real
 * @property string $location
 * @property string $land_parent
 * @property string $land_name
 * @property string $title
 * @property string $intra
 * @property integer $price
 * @property string $create_time
 * @property string $update_time
 * @property string $create_user
 * @property integer $viewer_num
 * @property integer $collect_num
 */
class FarmLand extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%land}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'status', 'owner', 'is_real', 'price', 'viewer_num', 'collect_num'], 'integer'],
            [['intra'], 'string'],
            [['create_time', 'update_time'], 'safe'],
            [['location', 'land_parent', 'land_name', 'title'], 'string', 'max' => 200],
            [['create_user'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'status' => 'Status',
            'owner' => 'Owner',
            'is_real' => 'Is Real',
            'location' => 'Location',
            'land_parent' => 'Land Parent',
            'land_name' => 'Land Name',
            'title' => 'Title',
            'intra' => 'Intra',
            'price' => 'Price',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'create_user' => 'Create User',
            'viewer_num' => 'Viewer Num',
            'collect_num' => 'Collect Num',
        ];
    }

    /**
     * @inheritdoc
     * @return FarmLandQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FarmLandQuery(get_called_class());
    }

    public static function getFarmlands($page)
    {
        $articles = self::find()  
            ->offset(($page[1]-1)*$page[0])
            ->limit($page[0])         
            ->orderBy(['update_time' => SORT_DESC])
            ->all();
        return $articles;
    }

    public static function getFarmlandsTotlePage() 
    { 
        $count = self::find() 
            ->count(); 
        $page = ceil( $count/Yii::$app->params['perPage'] ); 
        return $page; 
    }
}
