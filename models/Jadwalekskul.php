<?php

namespace app\models;

use Yii;
use \app\models\base\Jadwalekskul as BaseJadwalekskul;

/**
 * This is the model class for table "jadwalekskul".
 */
class Jadwalekskul extends BaseJadwalekskul
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['jadwalekskul_id', 'ekskul_id', 'jadwal_masukekskul', 'jadwal_pulangekskul', 'batas_awal_masukekskul', 'batas_akhir_masukekskul', 'batas_awal_pulangekskul', 'batas_akhir_pulangekskul', 'isaktif'], 'required'],
            [['ekskul_id'], 'integer'],
            [['jadwal_masukekskul', 'jadwal_pulangekskul', 'batas_awal_masukekskul', 'batas_akhir_masukekskul', 'batas_awal_pulangekskul', 'batas_akhir_pulangekskul'], 'safe'],
            [['jadwalekskul_id'], 'string', 'max' => 11],
            [['isaktif'], 'string', 'max' => 4]
        ]);
    }
	
}
