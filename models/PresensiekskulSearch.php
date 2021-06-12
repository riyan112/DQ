<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Presensiekskul;

/**
 * app\models\PresensiekskulSearch represents the model behind the search form about `app\models\Presensiekskul`.
 */
 class PresensiekskulSearch extends Presensiekskul
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['presensiekskul_id', 'jadwalekskul_id', 'tgl_presensiekskkul', 'statuskehadiranekskul', 'jam_masukekskul', 'jam_pulangekskul', 'lokasi', 'keterangan'], 'safe'],
            [['siswa_id', 'izinekskul_id'], 'integer'],
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
        $query = Presensiekskul::find();

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
            'siswa_id' => $this->siswa_id,
            'tgl_presensiekskkul' => $this->tgl_presensiekskkul,
            'izinekskul_id' => $this->izinekskul_id,
            'jam_masukekskul' => $this->jam_masukekskul,
            'jam_pulangekskul' => $this->jam_pulangekskul,
        ]);

        $query->andFilterWhere(['like', 'presensiekskul_id', $this->presensiekskul_id])
            ->andFilterWhere(['like', 'jadwalekskul_id', $this->jadwalekskul_id])
            ->andFilterWhere(['like', 'statuskehadiranekskul', $this->statuskehadiranekskul])
            ->andFilterWhere(['like', 'lokasi', $this->lokasi])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
