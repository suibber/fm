<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%land_action}}".
 *
 * @property integer $id
 * @property integer $land_id
 * @property integer $vegetable_id
 * @property integer $status
 * @property integer $type
 * @property string $create_time
 * @property string $do_time
 * @property string $do_user
 */
class FarmLandAction extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%land_action}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['land_id', 'vegetable_id', 'status', 'type'], 'integer'],
            [['create_time', 'do_time'], 'safe'],
            [['do_user'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'land_id' => 'Land ID',
            'vegetable_id' => 'Vegetable ID',
            'status' => 'Status',
            'type' => 'Type',
            'create_time' => 'Create Time',
            'do_time' => 'Do Time',
            'do_user' => 'Do User',
        ];
    }

    /**
     * @inheritdoc
     * @return FarmLandActionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FarmLandActionQuery(get_called_class());
    }
}
