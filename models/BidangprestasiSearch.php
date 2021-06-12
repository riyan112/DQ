<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Bidangprestasi;

/**
 * app\models\BidangprestasiSearch represents the model behind the search form about `app\models\Bidangprestasi`.
 */
 class BidangprestasiSearch extends Bidangprestasi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bidangprestasi_id'], 'integer'],
            [['namabidangprestasi'], 'safe'],
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
        $query = Bidangprestasi::find();

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
            'bidangprestasi_id' => $this->bidangprestasi_id,
        ]);

        $query->andFilterWhere(['like', 'namabidangprestasi', $this->namabidangprestasi]);

        return $dataProvider;
    }
}
