<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pegawai;

/**
 * app\models\PegawaiSearch represents the model behind the search form about `app\models\Pegawai`.
 */
 class PegawaiSearch extends Pegawai
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pegawai_id', 'nip', 'nama_pegawai', 'jk', 'tempat_lahir', 'tgl_lahir', 'alamat', 'status_kawin', 'nama_pasangan', 'tmt', 'statuspegawai_id', 'jurusan', 'nama_sekolah', 'sertifikasi', 'status_inpasing', 'jenispegawai_id', 'tugas_tambahan', 'kaderisasi_nu'], 'safe'],
            [['sekolah_id', 'pangkatgolongan_id', 'pendidikan_id'], 'integer'],
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
        $query = Pegawai::find();

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
            'tgl_lahir' => $this->tgl_lahir,
            'sekolah_id' => $this->sekolah_id,
            'tmt' => $this->tmt,
            'pangkatgolongan_id' => $this->pangkatgolongan_id,
            'pendidikan_id' => $this->pendidikan_id,
        ]);

        $query->andFilterWhere(['like', 'pegawai_id', $this->pegawai_id])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'nama_pegawai', $this->nama_pegawai])
            ->andFilterWhere(['like', 'jk', $this->jk])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'status_kawin', $this->status_kawin])
            ->andFilterWhere(['like', 'nama_pasangan', $this->nama_pasangan])
            ->andFilterWhere(['like', 'statuspegawai_id', $this->statuspegawai_id])
            ->andFilterWhere(['like', 'jurusan', $this->jurusan])
            ->andFilterWhere(['like', 'nama_sekolah', $this->nama_sekolah])
            ->andFilterWhere(['like', 'sertifikasi', $this->sertifikasi])
            ->andFilterWhere(['like', 'status_inpasing', $this->status_inpasing])
            ->andFilterWhere(['like', 'jenispegawai_id', $this->jenispegawai_id])
            ->andFilterWhere(['like', 'tugas_tambahan', $this->tugas_tambahan])
            ->andFilterWhere(['like', 'kaderisasi_nu', $this->kaderisasi_nu]);

        return $dataProvider;
    }
}
