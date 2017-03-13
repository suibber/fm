<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\FarmLand;

/**
 * FarmLandSearch represents the model behind the search form about `common\models\FarmLand`.
 */
class FarmLandSearch extends FarmLand
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'type', 'status', 'owner', 'is_real', 'price', 'viewer_num', 'collect_num'], 'integer'],
            [['location', 'land_parent', 'land_name', 'title', 'intra', 'create_time', 'update_time', 'create_user'], 'safe'],
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
        $query = FarmLand::find();

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
            'owner' => $this->owner,
            'is_real' => $this->is_real,
            'price' => $this->price,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'viewer_num' => $this->viewer_num,
            'collect_num' => $this->collect_num,
        ]);

        $query->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'land_parent', $this->land_parent])
            ->andFilterWhere(['like', 'land_name', $this->land_name])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'intra', $this->intra])
            ->andFilterWhere(['like', 'create_user', $this->create_user]);

        return $dataProvider;
    }
}
