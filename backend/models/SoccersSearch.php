<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Soccers;

/**
 * SoccersSearch represents the model behind the search form about `backend\models\Soccers`.
 */
class SoccersSearch extends Soccers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'goals', 'assists', 'id_club', 'id_country'], 'integer'],
            [['name', 'fname', 'oname', 'img'], 'safe'],
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
        $query = Soccers::find();

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
            'goals' => $this->goals,
            'assists' => $this->assists,
            'id_club' => $this->id_club,
            'id_country' => $this->id_country,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'oname', $this->oname])
            ->andFilterWhere(['like', 'img', $this->img]);

        return $dataProvider;
    }
}
