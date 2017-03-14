<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%message}}".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $user_name
 * @property string $message
 * @property string $return_message
 */
class FarmMessage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%message}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['user_name'], 'string', 'max' => 200],
            [['message', 'return_message'], 'string', 'max' => 2000]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'user_name' => 'User Name',
            'message' => 'Message',
            'return_message' => 'Return Message',
        ];
    }

    /**
     * @inheritdoc
     * @return FarmMessageQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FarmMessageQuery(get_called_class());
    }
}
