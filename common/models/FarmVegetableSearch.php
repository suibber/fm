<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\FarmVegetable;

/**
 * FarmVegetableSearch represents the model behind the search form about `common\models\FarmVegetable`.
 */
class FarmVegetableSearch extends FarmVegetable
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'except_days', 'viewer_num', 'collect_num', 'price'], 'integer'],
            [['sow_date_start', 'sow_date_end', 'name', 'intra', 'except_production'], 'safe'],
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
        $query = FarmVegetable::find();

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
            'sow_date_start' => $this->sow_date_start,
            'sow_date_end' => $this->sow_date_end,
            'except_days' => $this->except_days,
            'viewer_num' => $this->viewer_num,
            'collect_num' => $this->collect_num,
            'price' => $this->price,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'intra', $this->intra])
            ->andFilterWhere(['like', 'except_production', $this->except_production]);

        return $dataProvider;
    }
}
