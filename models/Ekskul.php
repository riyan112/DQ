<?php

namespace app\models;

use Yii;
use \app\models\base\Ekskul as BaseEkskul;

/**
 * This is the model class for table "ekskul".
 */
class Ekskul extends BaseEkskul
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['siswa_id', 'jenisekskul_id', 'nilai', 'keterangan'], 'required'],
            [['siswa_id', 'jenisekskul_id'], 'integer'],
            [['nilai'], 'string', 'max' => 10],
            [['keterangan'], 'string', 'max' => 255]
        ]);
    }
	
}
