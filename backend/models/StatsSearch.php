<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Stats;

/**
 * StatsSearch represents the model behind the search form about `backend\models\Stats`.
 */
class StatsSearch extends Stats
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_match', 'y_card1', 'y_card2', 'r_card1', 'r_card2', 'shots1', 'shots2', 'sh_on_ts1', 'sh_on_ts2', 'corners1', 'corners2', 'foul1', 'foul2', 'offsides1', 'offsides2'], 'integer'],
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
        $query = Stats::find();

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
            'id_match' => $this->id_match,
            'y_card1' => $this->y_card1,
            'y_card2' => $this->y_card2,
            'r_card1' => $this->r_card1,
            'r_card2' => $this->r_card2,
            'shots1' => $this->shots1,
            'shots2' => $this->shots2,
            'sh_on_ts1' => $this->sh_on_ts1,
            'sh_on_ts2' => $this->sh_on_ts2,
            'corners1' => $this->corners1,
            'corners2' => $this->corners2,
            'foul1' => $this->foul1,
            'foul2' => $this->foul2,
            'offsides1' => $this->offsides1,
            'offsides2' => $this->offsides2,
        ]);

        return $dataProvider;
    }
}
