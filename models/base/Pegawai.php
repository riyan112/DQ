<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "pegawai".
 *
 * @property string $pegawai_id
 * @property string $nip
 * @property string $nama_pegawai
 * @property string $jk
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property string $alamat
 * @property string $status_kawin
 * @property string $nama_pasangan
 * @property integer $sekolah_id
 * @property string $tmt
 * @property string $statuspegawai_id
 * @property integer $pangkatgolongan_id
 * @property integer $pendidikan_id
 * @property string $jurusan
 * @property string $nama_sekolah
 * @property string $sertifikasi
 * @property string $status_inpasing
 * @property string $jenispegawai_id
 * @property string $tugas_tambahan
 * @property string $kaderisasi_nu
 *
 * @property \app\models\Cuti[] $cutis
 * @property \app\models\Izin[] $izins
 * @property \app\models\Pangkatgolongan $pangkatgolongan
 * @property \app\models\Statuspegawai $statuspegawai
 * @property \app\models\Jenispegawai $jenispegawai
 * @property \app\models\Sekolah $sekolah
 * @property \app\models\PendidikanPegawai[] $pendidikanPegawais
 * @property \app\models\Presensi[] $presensis
 */
class Pegawai extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'cutis',
            'izins',
            'pangkatgolongan',
            'statuspegawai',
            'jenispegawai',
            'sekolah',
            'pendidikanPegawais',
            'presensis'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pegawai_id', 'nip', 'nama_pegawai', 'jk', 'tempat_lahir', 'tgl_lahir', 'alamat', 'status_kawin', 'sekolah_id', 'pendidikan_id', 'jenispegawai_id', 'tugas_tambahan'], 'required'],
            [['tgl_lahir', 'tmt'], 'safe'],
            [['sekolah_id', 'pangkatgolongan_id', 'pendidikan_id'], 'integer'],
            [['pegawai_id', 'statuspegawai_id'], 'string', 'max' => 20],
            [['nip', 'jurusan', 'nama_sekolah', 'tugas_tambahan'], 'string', 'max' => 30],
            [['nama_pegawai'], 'string', 'max' => 100],
            [['jk'], 'string', 'max' => 1],
            [['tempat_lahir', 'nama_pasangan'], 'string', 'max' => 50],
            [['alamat'], 'string', 'max' => 150],
            [['status_kawin', 'sertifikasi', 'status_inpasing', 'jenispegawai_id', 'kaderisasi_nu'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pegawai_id' => 'Pegawai ID',
            'nip' => 'Nip',
            'nama_pegawai' => 'Nama Pegawai',
            'jk' => 'Jk',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tgl Lahir',
            'alamat' => 'Alamat',
            'status_kawin' => 'Status Kawin',
            'nama_pasangan' => 'Nama Pasangan',
            'sekolah_id' => 'Sekolah ID',
            'tmt' => 'Tmt',
            'statuspegawai_id' => 'Statuspegawai ID',
            'pangkatgolongan_id' => 'Pangkatgolongan ID',
            'pendidikan_id' => 'Pendidikan ID',
            'jurusan' => 'Jurusan',
            'nama_sekolah' => 'Nama Sekolah',
            'sertifikasi' => 'Sertifikasi',
            'status_inpasing' => 'Status Inpasing',
            'jenispegawai_id' => 'Jenispegawai ID',
            'tugas_tambahan' => 'Tugas Tambahan',
            'kaderisasi_nu' => 'Kaderisasi Nu',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCutis()
    {
        return $this->hasMany(\app\models\Cuti::className(), ['pegawai_id' => 'pegawai_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIzins()
    {
        return $this->hasMany(\app\models\Izin::className(), ['pegawai_id' => 'pegawai_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPangkatgolongan()
    {
        return $this->hasOne(\app\models\Pangkatgolongan::className(), ['pangkatgolongan_id' => 'pangkatgolongan_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatuspegawai()
    {
        return $this->hasOne(\app\models\Statuspegawai::className(), ['statuspegawai_id' => 'statuspegawai_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenispegawai()
    {
        return $this->hasOne(\app\models\Jenispegawai::className(), ['jenispegawai_id' => 'jenispegawai_id']);
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
    public function getPendidikanPegawais()
    {
        return $this->hasMany(\app\models\PendidikanPegawai::className(), ['pegawai_id' => 'pegawai_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPresensis()
    {
        return $this->hasMany(\app\models\Presensi::className(), ['pegawai_id' => 'pegawai_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\PegawaiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\PegawaiQuery(get_called_class());
    }
}
