<?php

namespace app\models;

use Yii;
use \app\models\base\Presensiekskul as BasePresensiekskul;

/**
 * This is the model class for table "presensiekskul".
 */
class Presensiekskul extends BasePresensiekskul
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['presensiekskul_id', 'siswa_id', 'jadwalekskul_id', 'tgl_presensiekskkul', 'statuskehadiranekskul', 'izinekskul_id', 'jam_masukekskul', 'jam_pulangekskul', 'lokasi', 'keterangan'], 'required'],
            [['siswa_id', 'izinekskul_id'], 'integer'],
            [['tgl_presensiekskkul', 'jam_masukekskul', 'jam_pulangekskul'], 'safe'],
            [['statuskehadiranekskul'], 'string'],
            [['presensiekskul_id', 'jadwalekskul_id'], 'string', 'max' => 11],
            [['lokasi', 'keterangan'], 'string', 'max' => 30]
        ]);
    }
	
}
