<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%land_message}}".
 *
 * @property integer $id
 * @property integer $type
 * @property integer $status
 * @property integer $land_id
 * @property integer $from_user
 * @property string $create_time
 * @property string $update_time
 * @property string $message
 */
class FarmLandMessage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%land_message}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'status', 'land_id', 'from_user'], 'integer'],
            [['create_time', 'update_time'], 'safe'],
            [['message'], 'string', 'max' => 400]
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
            'from_user' => 'From User',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'message' => 'Message',
        ];
    }

    /**
     * @inheritdoc
     * @return FarmQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FarmQuery(get_called_class());
    }
}
