<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Matches;

/**
 * MatchesSearch represents the model behind the search form about `backend\models\Matches`.
 */
class MatchesSearch extends Matches
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tur', 'id_champ', 'date', 'id_team1', 'id_team2', 'score1', 'score2', 'score11', 'score21'], 'integer'],
            [['text'], 'safe'],
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
        $query = Matches::find();

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
            'tur' => $this->tur,
            'id_champ' => $this->id_champ,
            'date' => $this->date,
            'id_team1' => $this->id_team1,
            'id_team2' => $this->id_team2,
            'score1' => $this->score1,
            'score2' => $this->score2,
            'score11' => $this->score11,
            'score21' => $this->score21,
        ]);

        $query->andFilterWhere(['like', 'text', $this->text]);

        return $dataProvider;
    }
}
