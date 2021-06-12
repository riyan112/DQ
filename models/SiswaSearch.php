<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Siswa;

/**
 * app\models\SiswaSearch represents the model behind the search form about `app\models\Siswa`.
 */
 class SiswaSearch extends Siswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['siswa_id', 'agama_id', 'sekolah_id', 'kelas_id', 'kelasparalel_id', 'statussiswa_id', 'asalsekolah_id', 'hobi_id', 'citacita_id', 'jumlahsaudara', 'jenisasalsekolah_id', 'statusasalsekolah_id', 'jaraklokasisiswa_id', 'alattransportasi_id', 'pendidikanayah_id', 'pekerjaanayah_id', 'pendidikanibu_id', 'pekerjaanibu_id', 'penghasilanortu_id'], 'integer'],
            [['nis', 'nisn', 'nik', 'namasiswa', 'tempatlahir', 'tanggallahir', 'jeniskelamin_id', 'kabupatenkotaasalsekolahasal', 'alamat', 'propinsi', 'kabupaten', 'kecamatan', 'desakelurahan', 'kodepos', 'tunarungu', 'tunanetra', 'tunadaksa', 'tunagrahita', 'tunalaras', 'lambanbelajar', 'sulitbelajar', 'gangguankomunikasi', 'bakatluarbiasa', 'nomorkartukeluarga', 'namaayah', 'nikayah', 'namaibu', 'nikibu', 'nomorkkskps', 'nomorpkh', 'nomorkip', 'statuspenerimapipbsm', 'alasanstatuspenerimaapipbsm', 'periodepenerimaanpipbsm', 'fotosiswa'], 'safe'],
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
        $query = Siswa::find();

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
            'tanggallahir' => $this->tanggallahir,
            'agama_id' => $this->agama_id,
            'sekolah_id' => $this->sekolah_id,
            'kelas_id' => $this->kelas_id,
            'kelasparalel_id' => $this->kelasparalel_id,
            'statussiswa_id' => $this->statussiswa_id,
            'asalsekolah_id' => $this->asalsekolah_id,
            'hobi_id' => $this->hobi_id,
            'citacita_id' => $this->citacita_id,
            'jumlahsaudara' => $this->jumlahsaudara,
            'jenisasalsekolah_id' => $this->jenisasalsekolah_id,
            'statusasalsekolah_id' => $this->statusasalsekolah_id,
            'jaraklokasisiswa_id' => $this->jaraklokasisiswa_id,
            'alattransportasi_id' => $this->alattransportasi_id,
            'pendidikanayah_id' => $this->pendidikanayah_id,
            'pekerjaanayah_id' => $this->pekerjaanayah_id,
            'pendidikanibu_id' => $this->pendidikanibu_id,
            'pekerjaanibu_id' => $this->pekerjaanibu_id,
            'penghasilanortu_id' => $this->penghasilanortu_id,
            //'detailprestasi_id' => $this->detailprestasi_id,
            //'detailbeasiswa_id' => $this->detailbeasiswa_id,
        ]);

        $query->andFilterWhere(['like', 'nis', $this->nis])
            ->andFilterWhere(['like', 'nisn', $this->nisn])
            ->andFilterWhere(['like', 'nik', $this->nik])
            ->andFilterWhere(['like', 'namasiswa', $this->namasiswa])
            ->andFilterWhere(['like', 'tempatlahir', $this->tempatlahir])
            ->andFilterWhere(['like', 'jeniskelamin_id', $this->jeniskelamin_id])
            ->andFilterWhere(['like', 'kabupatenkotaasalsekolahasal', $this->kabupatenkotaasalsekolahasal])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'propinsi', $this->propinsi])
            ->andFilterWhere(['like', 'kabupaten', $this->kabupaten])
            ->andFilterWhere(['like', 'kecamatan', $this->kecamatan])
            ->andFilterWhere(['like', 'desakelurahan', $this->desakelurahan])
            ->andFilterWhere(['like', 'kodepos', $this->kodepos])
            ->andFilterWhere(['like', 'tunarungu', $this->tunarungu])
            ->andFilterWhere(['like', 'tunanetra', $this->tunanetra])
            ->andFilterWhere(['like', 'tunadaksa', $this->tunadaksa])
            ->andFilterWhere(['like', 'tunagrahita', $this->tunagrahita])
            ->andFilterWhere(['like', 'tunalaras', $this->tunalaras])
            ->andFilterWhere(['like', 'lambanbelajar', $this->lambanbelajar])
            ->andFilterWhere(['like', 'sulitbelajar', $this->sulitbelajar])
            ->andFilterWhere(['like', 'gangguankomunikasi', $this->gangguankomunikasi])
            ->andFilterWhere(['like', 'bakatluarbiasa', $this->bakatluarbiasa])
            ->andFilterWhere(['like', 'nomorkartukeluarga', $this->nomorkartukeluarga])
            ->andFilterWhere(['like', 'namaayah', $this->namaayah])
            ->andFilterWhere(['like', 'nikayah', $this->nikayah])
            ->andFilterWhere(['like', 'namaibu', $this->namaibu])
            ->andFilterWhere(['like', 'nikibu', $this->nikibu])
            ->andFilterWhere(['like', 'nomorkkskps', $this->nomorkkskps])
            ->andFilterWhere(['like', 'nomorpkh', $this->nomorpkh])
            ->andFilterWhere(['like', 'nomorkip', $this->nomorkip])
            ->andFilterWhere(['like', 'statuspenerimapipbsm', $this->statuspenerimapipbsm])
            ->andFilterWhere(['like', 'alasanstatuspenerimaapipbsm', $this->alasanstatuspenerimaapipbsm])
            ->andFilterWhere(['like', 'periodepenerimaanpipbsm', $this->periodepenerimaanpipbsm])
            ->andFilterWhere(['like', 'fotosiswa', $this->fotosiswa]);

        return $dataProvider;
    }
}
