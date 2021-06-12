<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "siswa".
 *
 * @property integer $siswa_id
 * @property string $nis
 * @property string $nisn
 * @property string $nik
 * @property string $namasiswa
 * @property string $tempatlahir
 * @property string $tanggallahir
 * @property string $jeniskelamin_id
 * @property integer $agama_id
 * @property integer $sekolah_id
 * @property integer $kelas_id
 * @property integer $kelasparalel_id
 * @property integer $statussiswa_id
 * @property integer $asalsekolah_id
 * @property integer $hobi_id
 * @property integer $citacita_id
 * @property integer $jumlahsaudara
 * @property integer $jenisasalsekolah_id
 * @property integer $statusasalsekolah_id
 * @property string $kabupatenkotaasalsekolahasal
 * @property string $alamat
 * @property string $propinsi
 * @property string $kabupaten
 * @property string $kecamatan
 * @property string $desakelurahan
 * @property string $kodepos
 * @property integer $jaraklokasisiswa_id
 * @property integer $alattransportasi_id
 * @property integer $tunarungu
 * @property integer $tunanetra
 * @property integer $tunadaksa
 * @property integer $tunagrahita
 * @property integer $tunalaras
 * @property integer $lambanbelajar
 * @property integer $sulitbelajar
 * @property integer $gangguankomunikasi
 * @property integer $bakatluarbiasa
 * @property string $nomorkartukeluarga
 * @property string $namaayah
 * @property string $nikayah
 * @property integer $pendidikanayah_id
 * @property integer $pekerjaanayah_id
 * @property string $namaibu
 * @property string $nikibu
 * @property integer $pendidikanibu_id
 * @property integer $pekerjaanibu_id
 * @property integer $penghasilanortu_id
 * @property string $nomorkkskps
 * @property string $nomorpkh
 * @property string $nomorkip
 * @property integer $statuspenerimapipbsm
 * @property string $alasanstatuspenerimaapipbsm
 * @property string $periodepenerimaanpipbsm
 * @property integer $detailprestasi_id
 * @property integer $detailbeasiswa_id
 * @property string $fotosiswa
 *
 * @property \app\models\Alumni[] $alumnis
 * @property \app\models\Detailprestasi[] $detailprestasis
 * @property \app\models\Ekskul[] $ekskuls
 * @property \app\models\Hasilkaryasiswa[] $hasilkaryasiswas
 * @property \app\models\Izinekskul[] $izinekskuls
 * @property \app\models\Izinsiswa[] $izinsiswas
 * @property \app\models\Mutasi[] $mutasis
 * @property \app\models\Pelanggaran[] $pelanggarans
 * @property \app\models\Presensiekskul[] $presensiekskuls
 * @property \app\models\Presensisiswa[] $presensisiswas
 * @property \app\models\Jeniskelamin $jeniskelamin
 * @property \app\models\Statusasalsekolah $statusasalsekolah
 * @property \app\models\Jaraklokasisiswa $jaraklokasisiswa
 * @property \app\models\Alattransportasi $alattransportasi
 * @property \app\models\Pendidikan $pendidikanayah
 * @property \app\models\Pekerjaan $pekerjaanayah
 * @property \app\models\Pendidikan $pendidikanibu
 * @property \app\models\Pekerjaan $pekerjaanibu
 * @property \app\models\Penghasilanortu $penghasilanortu
 * @property \app\models\Detailprestasi $detailprestasi
 * @property \app\models\Sekolah $sekolah
 * @property \app\models\Agama $agama
 * @property \app\models\Detailbeasiswa $detailbeasiswa
 * @property \app\models\Kelas $kelas
 * @property \app\models\Kelasparalel $kelasparalel
 * @property \app\models\Statussiswa $statussiswa
 * @property \app\models\Asalsekolah $asalsekolah
 * @property \app\models\Hobi $hobi
 * @property \app\models\Citacita $citacita
 * @property \app\models\Jenisasalsekolah $jenisasalsekolah
 */
class Siswa extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    public $importFile;

    const SCENARIO_IMPORT = 'import';

    
    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'alumnis',
            'detailprestasis',
            'ekskuls',
            'hasilkaryasiswas',
            'izinekskuls',
            'izinsiswas',
            'mutasis',
            'pelanggarans',
            'presensiekskuls',
            'presensisiswas',
            'jeniskelamin',
            'statusasalsekolah',
            'jaraklokasisiswa',
            'alattransportasi',
            'pendidikanayah',
            'pekerjaanayah',
            'pendidikanibu',
            'pekerjaanibu',
            'penghasilanortu',
            'detailprestasi',
            'sekolah',
            'agama',
            'detailbeasiswa',
            'kelas',
            'kelasparalel',
            'statussiswa',
            'asalsekolah',
            'hobi',
            'citacita',
            'jenisasalsekolah'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            
            [['tanggallahir'], 'safe'],
            [['agama_id', 'sekolah_id', 'kelas_id', 'kelasparalel_id', 'statussiswa_id', 'asalsekolah_id', 'hobi_id', 'citacita_id', 'jumlahsaudara', 'jenisasalsekolah_id', 'statusasalsekolah_id', 'jaraklokasisiswa_id', 'alattransportasi_id', 'pendidikanayah_id', 'pekerjaanayah_id', 'pendidikanibu_id', 'pekerjaanibu_id', 'penghasilanortu_id'], 'integer'],
            [['namaayah', 'namaibu', 'agama_id', 'sekolah_id', 'kelas_id', 'kelasparalel_id', 'statussiswa_id', 'asalsekolah_id', 'hobi_id', 'citacita_id', 'jumlahsaudara', 'jenisasalsekolah_id', 'statusasalsekolah_id', 'jaraklokasisiswa_id', 'alattransportasi_id', 'pendidikanayah_id', 'pekerjaanayah_id', 'pendidikanibu_id', 'pekerjaanibu_id', 'penghasilanortu_id', 'namasiswa'], 'required'],
            [['nis', 'nisn', 'kodepos'], 'string', 'max' => 20],
            [['nik', 'nikayah', 'nikibu'], 'string', 'max' => 16],
            [['namasiswa', 'namaayah', 'namaibu'], 'string', 'max' => 150],
            [['tempatlahir', 'kabupatenkotaasalsekolahasal', 'propinsi', 'kabupaten', 'kecamatan', 'desakelurahan'], 'string', 'max' => 100],
            [['jeniskelamin_id', 'tunarungu', 'tunanetra', 'tunadaksa', 'tunagrahita', 'tunalaras', 'lambanbelajar', 'sulitbelajar', 'gangguankomunikasi', 'bakatluarbiasa', 'statuspenerimapipbsm'], 'string', 'max' => 1],
            [['alamat'], 'string', 'max' => 200],
            [['nomorkartukeluarga', 'nomorkkskps', 'nomorpkh', 'nomorkip'], 'string', 'max' => 30],
            [['alasanstatuspenerimaapipbsm', 'periodepenerimaanpipbsm'], 'string', 'max' => 255],
            [['fotosiswa'], 'file', 'extensions' => 'jpg, png, jpeg', 'maxSize' => 1024*1024, 'on' => 'create'],
            [['importFile'], 'required', 'on' => self::SCENARIO_IMPORT],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'siswa';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'siswa_id' => 'Siswa ID',
            'nis' => 'NIS',
            'nisn' => 'NISN',
            'nik' => 'NIK',
            'namasiswa' => 'Nama Siswa',
            'tempatlahir' => 'Tempat Lahir',
            'tanggallahir' => 'Tanggal Lahir',
            'jeniskelamin_id' => 'Jenis Kelamin',
            'agama_id' => 'Agama',
            'sekolah_id' => 'Sekolah',
            'kelas_id' => 'Tingkat Kelas',
            'kelasparalel_id' => 'Detail Kelas',
            'statussiswa_id' => 'Status Siswa',
            'asalsekolah_id' => 'Asal Sekolah',
            'hobi_id' => 'Hobi',
            'citacita_id' => 'Cita-cita',
            'jumlahsaudara' => 'Jumlah Saudara',
            'jenisasalsekolah_id' => 'Jenis Asal Sekolah',
            'statusasalsekolah_id' => 'Status Asal Sekolah',
            'kabupatenkotaasalsekolahasal' => 'Kabupaten/kota Asal Sekolah',
            'alamat' => 'Alamat',
            'propinsi' => 'Propinsi',
            'kabupaten' => 'Kabupaten',
            'kecamatan' => 'Kecamatan',
            'desakelurahan' => 'Desa/kelurahan',
            'kodepos' => 'Kode Pos',
            'jaraklokasisiswa_id' => 'Jarak Lokasi Rumah Siswa',
            'alattransportasi_id' => 'Alat Transportasi',
            'tunarungu' => 'Tuna Rungu',
            'tunanetra' => 'Tuna Netra',
            'tunadaksa' => 'Tuna Daksa',
            'tunagrahita' => 'Tuna Grahita',
            'tunalaras' => 'Tuna Laras',
            'lambanbelajar' => 'Lamban Belajar',
            'sulitbelajar' => 'Sulit Belajar',
            'gangguankomunikasi' => 'Gangguan Komunikasi',
            'bakatluarbiasa' => 'Bakat Luar Biasa',
            'nomorkartukeluarga' => 'Nomor Kartu Keluarga (KK)',
            'namaayah' => 'Nama Ayah',
            'nikayah' => 'NIK Ayah',
            'pendidikanayah_id' => 'Pendidikan Ayah',
            'pekerjaanayah_id' => 'Pekerjaan Ayah',
            'namaibu' => 'Nama Ibu',
            'nikibu' => 'NIK Ibu',
            'pendidikanibu_id' => 'Pendidikan Ibu',
            'pekerjaanibu_id' => 'Pekerjaan Ibu',
            'penghasilanortu_id' => 'Penghasilan Orang Tua',
            'nomorkkskps' => 'Nomor KKSKPS',
            'nomorpkh' => 'Nomor PKH',
            'nomorkip' => 'Nomor KIP',
            'statuspenerimapipbsm' => 'Status Penerima PIPBSM',
            'alasanstatuspenerimaapipbsm' => 'Alasan Status Penerimaa PIPBSM',
            'periodepenerimaanpipbsm' => 'Periode Penerimaan PIPBSM',
            //'detailprestasi_id' => 'Detailprestasi ID',
            //'detailbeasiswa_id' => 'Detailbeasiswa ID',
            'fotosiswa' => 'Foto Siswa',
            'importFile' => 'Import File',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlumnis()
    {
        return $this->hasMany(\app\models\Alumni::className(), ['siswa_id' => 'siswa_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailprestasis()
    {
        return $this->hasMany(\app\models\Detailprestasi::className(), ['siswa_id' => 'siswa_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEkskuls()
    {
        return $this->hasMany(\app\models\Ekskul::className(), ['siswa_id' => 'siswa_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHasilkaryasiswas()
    {
        return $this->hasMany(\app\models\Hasilkaryasiswa::className(), ['siswa_id' => 'siswa_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIzinekskuls()
    {
        return $this->hasMany(\app\models\Izinekskul::className(), ['siswa_id' => 'siswa_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIzinsiswas()
    {
        return $this->hasMany(\app\models\Izinsiswa::className(), ['siswa_id' => 'siswa_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMutasis()
    {
        return $this->hasMany(\app\models\Mutasi::className(), ['siswa_id' => 'siswa_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPelanggarans()
    {
        return $this->hasMany(\app\models\Pelanggaran::className(), ['siswa_id' => 'siswa_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPresensiekskuls()
    {
        return $this->hasMany(\app\models\Presensiekskul::className(), ['siswa_id' => 'siswa_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPresensisiswas()
    {
        return $this->hasMany(\app\models\Presensisiswa::className(), ['siswa_id' => 'siswa_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJeniskelamin()
    {
        return $this->hasOne(\app\models\Jeniskelamin::className(), ['jeniskelamin_id' => 'jeniskelamin_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatusasalsekolah()
    {
        return $this->hasOne(\app\models\Statusasalsekolah::className(), ['statusasalsekolah_id' => 'statusasalsekolah_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJaraklokasisiswa()
    {
        return $this->hasOne(\app\models\Jaraklokasisiswa::className(), ['jaraklokasisiswa_id' => 'jaraklokasisiswa_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlattransportasi()
    {
        return $this->hasOne(\app\models\Alattransportasi::className(), ['alattransportasi_id' => 'alattransportasi_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPendidikanayah()
    {
        return $this->hasOne(\app\models\Pendidikan::className(), ['pendidikan_id' => 'pendidikanayah_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPekerjaanayah()
    {
        return $this->hasOne(\app\models\Pekerjaan::className(), ['pekerjaan_id' => 'pekerjaanayah_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPendidikanibu()
    {
        return $this->hasOne(\app\models\Pendidikan::className(), ['pendidikan_id' => 'pendidikanibu_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPekerjaanibu()
    {
        return $this->hasOne(\app\models\Pekerjaan::className(), ['pekerjaan_id' => 'pekerjaanibu_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenghasilanortu()
    {
        return $this->hasOne(\app\models\Penghasilanortu::className(), ['penghasilanortu_id' => 'penghasilanortu_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailprestasi()
    {
        return $this->hasOne(\app\models\Detailprestasi::className(), ['detailprestasi_id' => 'detailprestasi_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSekolah()
    {
        return $this->hasOne(\app\models\Sekolah::className(), ['sekolah_id' => 'sekolah_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgama()
    {
        return $this->hasOne(\app\models\Agama::className(), ['agama_id' => 'agama_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailbeasiswa()
    {
        return $this->hasOne(\app\models\Detailbeasiswa::className(), ['detailbeasiswa_id' => 'detailbeasiswa_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKelas()
    {
        return $this->hasOne(\app\models\Kelas::className(), ['kelas_id' => 'kelas_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKelasparalel()
    {
        return $this->hasOne(\app\models\Kelasparalel::className(), ['kelasparalel_id' => 'kelasparalel_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatussiswa()
    {
        return $this->hasOne(\app\models\Statussiswa::className(), ['statussiswa_id' => 'statussiswa_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAsalsekolah()
    {
        return $this->hasOne(\app\models\Asalsekolah::className(), ['asalsekolah_id' => 'asalsekolah_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHobi()
    {
        return $this->hasOne(\app\models\Hobi::className(), ['hobi_id' => 'hobi_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCitacita()
    {
        return $this->hasOne(\app\models\Citacita::className(), ['citacita_id' => 'citacita_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenisasalsekolah()
    {
        return $this->hasOne(\app\models\Jenisasalsekolah::className(), ['jenisasalsekolah_id' => 'jenisasalsekolah_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\SiswaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\SiswaQuery(get_called_class());
    }

}
