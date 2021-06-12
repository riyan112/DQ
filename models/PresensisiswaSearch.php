<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Presensisiswa;

/**
 * app\models\PresensisiswaSearch represents the model behind the search form about `app\models\Presensisiswa`.
 */
 class PresensisiswaSearch extends Presensisiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['presensisiswa_id', 'jadwalpresensisiswa_id', 'tgl_presensi', 'statuskehadiran', 'jam_masuk', 'jam_pulang', 'lokasi', 'keterangan'], 'safe'],
            [['siswa_id', 'izinsiswa_id'], 'integer'],
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
        $query = Presensisiswa::find();

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
            'tgl_presensi' => $this->tgl_presensi,
            'izinsiswa_id' => $this->izinsiswa_id,
            'jam_masuk' => $this->jam_masuk,
            'jam_pulang' => $this->jam_pulang,
        ]);

        $query->andFilterWhere(['like', 'presensisiswa_id', $this->presensisiswa_id])
            ->andFilterWhere(['like', 'jadwalpresensisiswa_id', $this->jadwalpresensisiswa_id])
            ->andFilterWhere(['like', 'statuskehadiran', $this->statuskehadiran])
            ->andFilterWhere(['like', 'lokasi', $this->lokasi])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
