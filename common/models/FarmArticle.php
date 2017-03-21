<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%article}}".
 *
 * @property integer $id
 * @property integer $type
 * @property string $title
 * @property string $content
 * @property string $create_time
 * @property string $update_time
 * @property string $create_user
 * @property integer $viewer_num
 * @property integer $collect_num
 */
class FarmArticle extends \yii\db\ActiveRecord
{
    const TYPE_NEWS = 1;
    const TYPE_KNOWLEDGE = 2;
    const TYPE_OTHER = 3;
    const TYPE_SHARE = 4;
    public static $TYPES = [
        self::TYPE_NEWS => '新闻',
        self::TYPE_KNOWLEDGE => '知识',
        self::TYPE_OTHER => '信息',
        self::TYPE_SHARE => '活动',
    ];

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%article}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'viewer_num', 'collect_num'], 'integer'],
            [['content'], 'string'],
            [['create_time', 'update_time'], 'safe'],
            [['title'], 'string', 'max' => 200],
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
            'title' => 'Title',
            'content' => 'Content',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'create_user' => 'Create User',
            'viewer_num' => 'Viewer Num',
            'collect_num' => 'Collect Num',
        ];
    }

    /**
     * @inheritdoc
     * @return FarmArticleQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FarmArticleQuery(get_called_class());
    }

    public function getType_label()
    {
        return self::$TYPES[$this->type];
    }

    public static function getArticles($page, $type=0)
    {
        $articles = self::find();
        if ($type) {
            $articles = $articles
                ->where(['type' => $type]);
        }
        $articles = $articles 
            ->offset(($page[1]-1)*$page[0])
            ->limit($page[0])         
            ->orderBy(['update_time' => SORT_DESC])
            ->all();
        return $articles;
    }

    public static function getArticlesTotlePage() 
    { 
        $count = self::find() 
            ->count(); 
        $page = ceil( $count/Yii::$app->params['perPage'] ); 
        return $page; 
    }
}
