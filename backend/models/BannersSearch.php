<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Banners;

/**
 * BannersSearch represents the model behind the search form about `backend\models\Banners`.
 */
class BannersSearch extends Banners
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_place', 'interval'], 'integer'],
            [['size'], 'safe'],
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
        $query = Banners::find();

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
            'id_place' => $this->id_place,
            'interval' => $this->interval,
        ]);

        $query->andFilterWhere(['like', 'size', $this->size]);

        return $dataProvider;
    }
}
