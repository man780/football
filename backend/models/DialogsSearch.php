<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Dialogs;

/**
 * DialogsSearch represents the model behind the search form about `backend\models\Dialogs`.
 */
class DialogsSearch extends Dialogs
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_creator', 'gols', 'rank', 'status', 'dcreated', 'dmodified'], 'integer'],
            [['users', 'title'], 'safe'],
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
        $query = Dialogs::find();

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
            'id_creator' => $this->id_creator,
            'gols' => $this->gols,
            'rank' => $this->rank,
            'status' => $this->status,
            'dcreated' => $this->dcreated,
            'dmodified' => $this->dmodified,
        ]);

        $query->andFilterWhere(['like', 'users', $this->users])
            ->andFilterWhere(['like', 'title', $this->title]);

        return $dataProvider;
    }
}
