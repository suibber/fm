<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\FarmLandVegetable;

/**
 * FarmLandVegetableSearch represents the model behind the search form about `common\models\FarmLandVegetable`.
 */
class FarmLandVegetableSearch extends FarmLandVegetable
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'type', 'status', 'land_id', 'vegetable_id'], 'integer'],
            [['intra', 'create_time', 'update_time', 'sow_time', 'except_time'], 'safe'],
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
        $query = FarmLandVegetable::find();

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
            'type' => $this->type,
            'status' => $this->status,
            'land_id' => $this->land_id,
            'vegetable_id' => $this->vegetable_id,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'sow_time' => $this->sow_time,
            'except_time' => $this->except_time,
        ]);

        $query->andFilterWhere(['like', 'intra', $this->intra]);

        return $dataProvider;
    }
}
