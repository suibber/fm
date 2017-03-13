<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%land_vegetable}}".
 *
 * @property integer $id
 * @property integer $type
 * @property integer $status
 * @property integer $land_id
 * @property integer $vegetable_id
 * @property string $intra
 * @property string $create_time
 * @property string $update_time
 * @property string $sow_time
 * @property string $except_time
 */
class FarmLandVegetable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%land_vegetable}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'status', 'land_id', 'vegetable_id'], 'integer'],
            [['create_time', 'update_time', 'sow_time', 'except_time'], 'safe'],
            [['intra'], 'string', 'max' => 400]
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
            'land_id' => 'Land ID',
            'vegetable_id' => 'Vegetable ID',
            'intra' => 'Intra',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'sow_time' => 'Sow Time',
            'except_time' => 'Except Time',
        ];
    }

    /**
     * @inheritdoc
     * @return FarmLandVegetableQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FarmLandVegetableQuery(get_called_class());
    }
}
