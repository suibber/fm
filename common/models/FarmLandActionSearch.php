<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\FarmLandAction;

/**
 * FarmLandActionSearch represents the model behind the search form about `common\models\FarmLandAction`.
 */
class FarmLandActionSearch extends FarmLandAction
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'land_id', 'vegetable_id', 'status', 'type'], 'integer'],
            [['create_time', 'do_time', 'do_user'], 'safe'],
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
        $query = FarmLandAction::find();

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
            'land_id' => $this->land_id,
            'vegetable_id' => $this->vegetable_id,
            'status' => $this->status,
            'type' => $this->type,
            'create_time' => $this->create_time,
            'do_time' => $this->do_time,
        ]);

        $query->andFilterWhere(['like', 'do_user', $this->do_user]);

        return $dataProvider;
    }
}
