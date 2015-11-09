<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Streaming;

/**
 * StreamingSearch represents the model behind the search form about `backend\models\Streaming`.
 */
class StreamingSearch extends Streaming
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_match', 'id_event'], 'integer'],
            [['time', 'text'], 'safe'],
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
        $query = Streaming::find();

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
            'id_event' => $this->id_event,
        ]);

        $query->andFilterWhere(['like', 'time', $this->time])
            ->andFilterWhere(['like', 'text', $this->text]);

        return $dataProvider;
    }
}
