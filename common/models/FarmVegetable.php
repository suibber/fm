<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%vegetable}}".
 *
 * @property integer $id
 * @property string $sow_date_start
 * @property string $sow_date_end
 * @property integer $except_days
 * @property string $name
 * @property string $intra
 * @property string $except_production
 * @property integer $viewer_num
 * @property integer $collect_num
 * @property integer $price
 */
class FarmVegetable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%vegetable}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sow_date_start', 'sow_date_end'], 'safe'],
            [['except_days', 'viewer_num', 'collect_num', 'price'], 'integer'],
            [['intra'], 'string'],
            [['name'], 'string', 'max' => 200],
            [['except_production'], 'string', 'max' => 400]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sow_date_start' => 'Sow Date Start',
            'sow_date_end' => 'Sow Date End',
            'except_days' => 'Except Days',
            'name' => 'Name',
            'intra' => 'Intra',
            'except_production' => 'Except Production',
            'viewer_num' => 'Viewer Num',
            'collect_num' => 'Collect Num',
            'price' => 'Price',
        ];
    }

    /**
     * @inheritdoc
     * @return FarmVegetableQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FarmVegetableQuery(get_called_class());
    }
}
