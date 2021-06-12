<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "presensisiswa".
 *
 * @property string $presensisiswa_id
 * @property integer $siswa_id
 * @property string $jadwalpresensisiswa_id
 * @property string $tgl_presensi
 * @property string $statuskehadiran
 * @property integer $izinsiswa_id
 * @property string $jam_masuk
 * @property string $jam_pulang
 * @property string $lokasi
 * @property string $keterangan
 *
 * @property \app\models\Siswa $siswa
 * @property \app\models\Jadwalpresensisiswa $jadwalpresensisiswa
 * @property \app\models\Izinsiswa $izinsiswa
 */
class Presensisiswa extends \yii\db\ActiveRecord
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
            'jadwalpresensisiswa',
            'izinsiswa'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['presensisiswa_id', 'siswa_id', 'jadwalpresensisiswa_id', 'tgl_presensi', 'statuskehadiran', 'izinsiswa_id', 'jam_masuk', 'jam_pulang', 'lokasi', 'keterangan'], 'required'],
            [['siswa_id', 'izinsiswa_id'], 'integer'],
            [['tgl_presensi', 'jam_masuk', 'jam_pulang'], 'safe'],
            [['statuskehadiran'], 'string'],
            [['presensisiswa_id'], 'string', 'max' => 11],
            [['jadwalpresensisiswa_id', 'keterangan'], 'string', 'max' => 20],
            [['lokasi'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'presensisiswa';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'presensisiswa_id' => 'Presensisiswa ID',
            'siswa_id' => 'Siswa ID',
            'jadwalpresensisiswa_id' => 'Jadwalpresensisiswa ID',
            'tgl_presensi' => 'Tgl Presensi',
            'statuskehadiran' => 'Statuskehadiran',
            'izinsiswa_id' => 'Izinsiswa ID',
            'jam_masuk' => 'Jam Masuk',
            'jam_pulang' => 'Jam Pulang',
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
    public function getJadwalpresensisiswa()
    {
        return $this->hasOne(\app\models\Jadwalpresensisiswa::className(), ['jadwalpresensisiswa_id' => 'jadwalpresensisiswa_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIzinsiswa()
    {
        return $this->hasOne(\app\models\Izinsiswa::className(), ['izinsiswa_id' => 'izinsiswa_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\PresensisiswaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\PresensisiswaQuery(get_called_class());
    }
}
