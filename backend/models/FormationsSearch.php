<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Formations;

/**
 * FormationsSearch represents the model behind the search form about `backend\models\Formations`.
 */
class FormationsSearch extends Formations
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_match'], 'integer'],
            [['soccers1', 'soccers2'], 'safe'],
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
        $query = Formations::find();

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
        ]);

        $query->andFilterWhere(['like', 'soccers1', $this->soccers1])
            ->andFilterWhere(['like', 'soccers2', $this->soccers2]);

        return $dataProvider;
    }
}
