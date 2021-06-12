<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pertanyaan;

/**
 * app\models\PertanyaanSearch represents the model behind the search form about `app\models\Pertanyaan`.
 */
 class PertanyaanSearch extends Pertanyaan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pertanyaan_id', 'periodetracer_id', 'jenistracer_id', 'jenispertanyaan_id'], 'integer'],
            [['isipertanyaan', 'nourut', 'halaman', 'namahalaman', 'isaktifpertanyaan'], 'safe'],
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
        $query = Pertanyaan::find();

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
            'pertanyaan_id' => $this->pertanyaan_id,
            'periodetracer_id' => $this->periodetracer_id,
            'jenistracer_id' => $this->jenistracer_id,
            'jenispertanyaan_id' => $this->jenispertanyaan_id,
        ]);

        $query->andFilterWhere(['like', 'isipertanyaan', $this->isipertanyaan])
            ->andFilterWhere(['like', 'nourut', $this->nourut])
            ->andFilterWhere(['like', 'halaman', $this->halaman])
            ->andFilterWhere(['like', 'namahalaman', $this->namahalaman])
            ->andFilterWhere(['like', 'isaktifpertanyaan', $this->isaktifpertanyaan]);

        return $dataProvider;
    }
}
