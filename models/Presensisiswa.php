<?php

namespace app\models;

use Yii;
use \app\models\base\Presensisiswa as BasePresensisiswa;

/**
 * This is the model class for table "presensisiswa".
 */
class Presensisiswa extends BasePresensisiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['presensisiswa_id', 'siswa_id', 'jadwalpresensisiswa_id', 'tgl_presensi', 'statuskehadiran', 'izinsiswa_id', 'jam_masuk', 'jam_pulang', 'lokasi', 'keterangan'], 'required'],
            [['siswa_id', 'izinsiswa_id'], 'integer'],
            [['tgl_presensi', 'jam_masuk', 'jam_pulang'], 'safe'],
            [['statuskehadiran'], 'string'],
            [['presensisiswa_id'], 'string', 'max' => 11],
            [['jadwalpresensisiswa_id', 'keterangan'], 'string', 'max' => 20],
            [['lokasi'], 'string', 'max' => 30]
        ]);
    }
	
}
