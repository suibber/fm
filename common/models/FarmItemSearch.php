<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\FarmItem;

/**
 * FarmItemSearch represents the model behind the search form about `common\models\FarmItem`.
 */
class FarmItemSearch extends FarmItem
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'display_order', 'store_num', 'sold_num', 'real_price', 'sale_price'], 'integer'],
            [['title', 'content', 'icon'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = FarmItem::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'display_order' => $this->display_order,
            'store_num' => $this->store_num,
            'sold_num' => $this->sold_num,
            'real_price' => $this->real_price,
            'sale_price' => $this->sale_price,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'icon', $this->icon]);

        return $dataProvider;
    }
}
