<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Alumni;

/**
 * app\models\AlumniSearch represents the model behind the search form about `app\models\Alumni`.
 */
 class AlumniSearch extends Alumni
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alumni_id', 'siswa_id'], 'integer'],
            [['nis', 'nisn', 'nik', 'namasiswa', 'tanggalproses', 'isproses'], 'safe'],
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
        $query = Alumni::find();

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
            'alumni_id' => $this->alumni_id,
            'siswa_id' => $this->siswa_id,
            'tanggalproses' => $this->tanggalproses,
        ]);

        $query->andFilterWhere(['like', 'nis', $this->nis])
            ->andFilterWhere(['like', 'nisn', $this->nisn])
            ->andFilterWhere(['like', 'nik', $this->nik])
            ->andFilterWhere(['like', 'namasiswa', $this->namasiswa])
            ->andFilterWhere(['like', 'isproses', $this->isproses]);

        return $dataProvider;
    }
}
