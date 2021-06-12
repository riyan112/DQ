<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Izinsiswa;

/**
 * app\models\IzinsiswaSearch represents the model behind the search form about `app\models\Izinsiswa`.
 */
 class IzinsiswaSearch extends Izinsiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['izinsiswa_id', 'siswa_id'], 'integer'],
            [['keterangan_izin', 'tgl_izin', 'bukti'], 'safe'],
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
        $query = Izinsiswa::find();

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
            'izinsiswa_id' => $this->izinsiswa_id,
            'siswa_id' => $this->siswa_id,
            'tgl_izin' => $this->tgl_izin,
        ]);

        $query->andFilterWhere(['like', 'keterangan_izin', $this->keterangan_izin])
            ->andFilterWhere(['like', 'bukti', $this->bukti]);

        return $dataProvider;
    }
}
