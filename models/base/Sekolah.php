<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "sekolah".
 *
 * @property integer $sekolah_id
 * @property integer $jenjang_sekolah_id
 * @property integer $nsm
 * @property integer $npsn
 * @property string $nama_sekolah
 * @property string $alamat_sekolah
 * @property string $kelurahan
 * @property string $kecamatan
 * @property string $kabupaten
 * @property string $provinsi
 * @property integer $kode_pos
 *
 * @property \app\models\Pegawai[] $pegawais
 * @property \app\models\Jenjang $jenjangSekolah
 * @property \app\models\Siswa[] $siswas
 */
class Sekolah extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'pegawais',
            'jenjangSekolah',
            'siswas'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jenjang_sekolah_id', 'nsm', 'npsn', 'nama_sekolah', 'alamat_sekolah', 'kelurahan', 'kecamatan', 'kabupaten', 'provinsi', 'kode_pos'], 'required'],
            [['jenjang_sekolah_id', 'nsm', 'npsn', 'kode_pos'], 'integer'],
            [['nama_sekolah', 'kelurahan', 'kecamatan', 'kabupaten', 'provinsi'], 'string', 'max' => 50],
            [['alamat_sekolah'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sekolah';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sekolah_id' => 'Sekolah ID',
            'jenjang_sekolah_id' => 'Jenjang Sekolah ID',
            'nsm' => 'Nsm',
            'npsn' => 'Npsn',
            'nama_sekolah' => 'Nama Sekolah',
            'alamat_sekolah' => 'Alamat Sekolah',
            'kelurahan' => 'Kelurahan',
            'kecamatan' => 'Kecamatan',
            'kabupaten' => 'Kabupaten',
            'provinsi' => 'Provinsi',
            'kode_pos' => 'Kode Pos',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPegawais()
    {
        return $this->hasMany(\app\models\Pegawai::className(), ['sekolah_id' => 'sekolah_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenjangSekolah()
    {
        return $this->hasOne(\app\models\Jenjang::className(), ['jenjang_sekolah_id' => 'jenjang_sekolah_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiswas()
    {
        return $this->hasMany(\app\models\Siswa::className(), ['sekolah_id' => 'sekolah_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\SekolahQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\SekolahQuery(get_called_class());
    }
}
