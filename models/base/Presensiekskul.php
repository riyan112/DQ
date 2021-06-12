<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "presensiekskul".
 *
 * @property string $presensiekskul_id
 * @property integer $siswa_id
 * @property string $jadwalekskul_id
 * @property string $tgl_presensiekskkul
 * @property string $statuskehadiranekskul
 * @property integer $izinekskul_id
 * @property string $jam_masukekskul
 * @property string $jam_pulangekskul
 * @property string $lokasi
 * @property string $keterangan
 *
 * @property \app\models\Siswa $siswa
 * @property \app\models\Izinekskul $izinekskul
 * @property \app\models\Jadwalekskul $jadwalekskul
 */
class Presensiekskul extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'siswa',
            'izinekskul',
            'jadwalekskul'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['presensiekskul_id', 'siswa_id', 'jadwalekskul_id', 'tgl_presensiekskkul', 'statuskehadiranekskul', 'izinekskul_id', 'jam_masukekskul', 'jam_pulangekskul', 'lokasi', 'keterangan'], 'required'],
            [['siswa_id', 'izinekskul_id'], 'integer'],
            [['tgl_presensiekskkul', 'jam_masukekskul', 'jam_pulangekskul'], 'safe'],
            [['statuskehadiranekskul'], 'string'],
            [['presensiekskul_id', 'jadwalekskul_id'], 'string', 'max' => 11],
            [['lokasi', 'keterangan'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'presensiekskul';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'presensiekskul_id' => 'Presensiekskul ID',
            'siswa_id' => 'Siswa ID',
            'jadwalekskul_id' => 'Jadwalekskul ID',
            'tgl_presensiekskkul' => 'Tgl Presensiekskkul',
            'statuskehadiranekskul' => 'Statuskehadiranekskul',
            'izinekskul_id' => 'Izinekskul ID',
            'jam_masukekskul' => 'Jam Masukekskul',
            'jam_pulangekskul' => 'Jam Pulangekskul',
            'lokasi' => 'Lokasi',
            'keterangan' => 'Keterangan',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiswa()
    {
        return $this->hasOne(\app\models\Siswa::className(), ['siswa_id' => 'siswa_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIzinekskul()
    {
        return $this->hasOne(\app\models\Izinekskul::className(), ['izinekskul_id' => 'izinekskul_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJadwalekskul()
    {
        return $this->hasOne(\app\models\Jadwalekskul::className(), ['jadwalekskul_id' => 'jadwalekskul_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\PresensiekskulQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\PresensiekskulQuery(get_called_class());
    }
}
