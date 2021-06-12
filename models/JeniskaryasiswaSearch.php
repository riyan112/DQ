<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Jeniskaryasiswa;

/**
 * app\models\JeniskaryasiswaSearch represents the model behind the search form about `app\models\Jeniskaryasiswa`.
 */
 class JeniskaryasiswaSearch extends Jeniskaryasiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jeniskaryasiswa_id'], 'integer'],
            [['namajeniskaryasiswa'], 'safe'],
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
        $query = Jeniskaryasiswa::find();

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
            'jeniskaryasiswa_id' => $this->jeniskaryasiswa_id,
        ]);

        $query->andFilterWhere(['like', 'namajeniskaryasiswa', $this->namajeniskaryasiswa]);

        return $dataProvider;
    }
}
