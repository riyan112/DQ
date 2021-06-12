<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sumberbeasiswa;

/**
 * app\models\SumberbeasiswaSearch represents the model behind the search form about `app\models\Sumberbeasiswa`.
 */
 class SumberbeasiswaSearch extends Sumberbeasiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sumberbeasiswa_id'], 'integer'],
            [['namasumberbeasiswa'], 'safe'],
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
        $query = Sumberbeasiswa::find();

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
            'sumberbeasiswa_id' => $this->sumberbeasiswa_id,
        ]);

        $query->andFilterWhere(['like', 'namasumberbeasiswa', $this->namasumberbeasiswa]);

        return $dataProvider;
    }
}
