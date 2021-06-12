<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Jenisbeasiswa;

/**
 * app\models\JenisbeasiswaSearch represents the model behind the search form about `app\models\Jenisbeasiswa`.
 */
 class JenisbeasiswaSearch extends Jenisbeasiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jenisbeasiswa_id'], 'integer'],
            [['namabeasiswa'], 'safe'],
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
        $query = Jenisbeasiswa::find();

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
            'jenisbeasiswa_id' => $this->jenisbeasiswa_id,
        ]);

        $query->andFilterWhere(['like', 'namabeasiswa', $this->namabeasiswa]);

        return $dataProvider;
    }
}
