<?php

namespace app\models;

use Yii;
use \app\models\base\Siswa as BaseSiswa;

/**
 * This is the model class for table "siswa".
 */
class Siswa extends BaseSiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['tanggallahir'], 'safe'],
            [['agama_id', 'sekolah_id', 'kelas_id', 'kelasparalel_id', 'statussiswa_id', 'asalsekolah_id', 'hobi_id', 'citacita_id', 'jumlahsaudara', 'jenisasalsekolah_id', 'statusasalsekolah_id', 'jaraklokasisiswa_id', 'alattransportasi_id', 'pendidikanayah_id', 'pekerjaanayah_id', 'pendidikanibu_id', 'pekerjaanibu_id', 'penghasilanortu_id'], 'integer'],
            [['sekolah_id'], 'required'],
            [['nis', 'nisn', 'kodepos'], 'string', 'max' => 20],
            [['nik', 'nikayah', 'nikibu'], 'string', 'max' => 16],
            [['namasiswa', 'namaayah', 'namaibu'], 'string', 'max' => 150],
            [['tempatlahir', 'kabupatenkotaasalsekolahasal', 'propinsi', 'kabupaten', 'kecamatan', 'desakelurahan'], 'string', 'max' => 100],
            [['jeniskelamin_id', 'tunarungu', 'tunanetra', 'tunadaksa', 'tunagrahita', 'tunalaras', 'lambanbelajar', 'sulitbelajar', 'gangguankomunikasi', 'bakatluarbiasa', 'statuspenerimapipbsm'], 'string', 'max' => 1],
            [['alamat'], 'string', 'max' => 200],
            [['nomorkartukeluarga', 'nomorkkskps', 'nomorpkh', 'nomorkip'], 'string', 'max' => 30],
            [['alasanstatuspenerimaapipbsm', 'periodepenerimaanpipbsm'], 'string', 'max' => 255],
            [['fotosiswa'], 'file', 'on' => 'create']
        ]);
    }
	
}
