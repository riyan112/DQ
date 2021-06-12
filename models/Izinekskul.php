<?php

namespace app\models;

use Yii;
use \app\models\base\Izinekskul as BaseIzinekskul;

/**
 * This is the model class for table "izinekskul".
 */
class Izinekskul extends BaseIzinekskul
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['siswa_id', 'keteranganizinekskul', 'tgl_izinekskul', 'buktiizinekskul'], 'required'],
            [['siswa_id'], 'integer'],
            [['tgl_izinekskul'], 'safe'],
            [['keteranganizinekskul'], 'string', 'max' => 25],
            [['buktiizinekskul'], 'string', 'max' => 20]
        ]);
    }
	
}
