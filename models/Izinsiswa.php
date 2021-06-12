<?php

namespace app\models;

use Yii;
use \app\models\base\Izinsiswa as BaseIzinsiswa;

/**
 * This is the model class for table "izinsiswa".
 */
class Izinsiswa extends BaseIzinsiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['siswa_id', 'keterangan_izin', 'tgl_izin', 'bukti'], 'required'],
            [['siswa_id'], 'integer'],
            [['tgl_izin'], 'safe'],
            [['keterangan_izin'], 'string', 'max' => 25],
            [['bukti'], 'string', 'max' => 20]
        ]);
    }
	
}
