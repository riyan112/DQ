<?php

namespace app\models;

use Yii;
use \app\models\base\Jadwalpresensisiswa as BaseJadwalpresensisiswa;

/**
 * This is the model class for table "jadwalpresensisiswa".
 */
class Jadwalpresensisiswa extends BaseJadwalpresensisiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['jadwalpresensisiswa_id', 'jadwal_masuk', 'jadwal_pulang', 'batas_awal_masuk', 'batas_akhir_masuk', 'batas_awal_pulang', 'batas_akhir_pulang', 'isaktif'], 'required'],
            [['jadwal_masuk', 'jadwal_pulang', 'batas_awal_masuk', 'batas_akhir_masuk', 'batas_awal_pulang', 'batas_akhir_pulang'], 'safe'],
            [['jadwalpresensisiswa_id'], 'string', 'max' => 20],
            [['isaktif'], 'string', 'max' => 4]
        ]);
    }
	
}
