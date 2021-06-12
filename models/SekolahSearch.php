<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sekolah;

/**
 * app\models\SekolahSearch represents the model behind the search form about `app\models\Sekolah`.
 */
 class SekolahSearch extends Sekolah
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sekolah_id', 'jenjang_sekolah_id', 'nsm', 'npsn', 'kode_pos'], 'integer'],
            [['nama_sekolah', 'alamat_sekolah', 'kelurahan', 'kecamatan', 'kabupaten', 'provinsi'], 'safe'],
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
        $query = Sekolah::find();

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
            'sekolah_id' => $this->sekolah_id,
            'jenjang_sekolah_id' => $this->jenjang_sekolah_id,
            'nsm' => $this->nsm,
            'npsn' => $this->npsn,
            'kode_pos' => $this->kode_pos,
        ]);

        $query->andFilterWhere(['like', 'nama_sekolah', $this->nama_sekolah])
            ->andFilterWhere(['like', 'alamat_sekolah', $this->alamat_sekolah])
            ->andFilterWhere(['like', 'kelurahan', $this->kelurahan])
            ->andFilterWhere(['like', 'kecamatan', $this->kecamatan])
            ->andFilterWhere(['like', 'kabupaten', $this->kabupaten])
            ->andFilterWhere(['like', 'provinsi', $this->provinsi]);

        return $dataProvider;
    }
}
