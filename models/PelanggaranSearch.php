<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pelanggaran;

/**
 * app\models\PelanggaranSearch represents the model behind the search form about `app\models\Pelanggaran`.
 */
 class PelanggaranSearch extends Pelanggaran
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pelanggaran_id', 'siswa_id', 'jenispelanggaran_id', 'jeniskonseling_id'], 'integer'],
            [['pegawai_id', 'keteranganpelanggaran'], 'safe'],
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
        $query = Pelanggaran::find();

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
            'pelanggaran_id' => $this->pelanggaran_id,
            'siswa_id' => $this->siswa_id,
            'jenispelanggaran_id' => $this->jenispelanggaran_id,
            'jeniskonseling_id' => $this->jeniskonseling_id,
        ]);

        $query->andFilterWhere(['like', 'pegawai_id', $this->pegawai_id])
            ->andFilterWhere(['like', 'keteranganpelanggaran', $this->keteranganpelanggaran]);

        return $dataProvider;
    }
}
