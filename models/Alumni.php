<?php

namespace app\models;

use Yii;
use \app\models\base\Alumni as BaseAlumni;

/**
 * This is the model class for table "alumni".
 */
class Alumni extends BaseAlumni
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['siswa_id', 'nis', 'nisn', 'nik', 'namasiswa', 'isproses'], 'required'],
            [['siswa_id'], 'integer'],
            [['tanggalproses'], 'safe'],
            [['nis', 'nisn'], 'string', 'max' => 20],
            [['nik'], 'string', 'max' => 16],
            [['namasiswa'], 'string', 'max' => 255],
            [['isproses'], 'string', 'max' => 11]
        ]);
    }
	
}
