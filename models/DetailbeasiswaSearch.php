<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Detailbeasiswa;

/**
 * app\models\DetailbeasiswaSearch represents the model behind the search form about `app\models\Detailbeasiswa`.
 */
 class DetailbeasiswaSearch extends Detailbeasiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['detailbeasiswa_id', 'jenisbeasiswa_id', 'sumberbeasiswa_id'], 'integer'],
            [['jangkawaktu'], 'safe'],
            [['nominalditerima'], 'number'],
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
        $query = Detailbeasiswa::find();

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
            'detailbeasiswa_id' => $this->detailbeasiswa_id,
            'jenisbeasiswa_id' => $this->jenisbeasiswa_id,
            'sumberbeasiswa_id' => $this->sumberbeasiswa_id,
            'nominalditerima' => $this->nominalditerima,
        ]);

        $query->andFilterWhere(['like', 'jangkawaktu', $this->jangkawaktu]);

        return $dataProvider;
    }
}
