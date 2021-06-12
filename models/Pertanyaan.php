<?php

namespace app\models;

use Yii;
use \app\models\base\Pertanyaan as BasePertanyaan;

/**
 * This is the model class for table "pertanyaan".
 */
class Pertanyaan extends BasePertanyaan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['periodetracer_id', 'jenistracer_id', 'jenispertanyaan_id', 'isipertanyaan', 'nourut', 'halaman', 'namahalaman', 'isaktifpertanyaan'], 'required'],
            [['periodetracer_id', 'jenistracer_id', 'jenispertanyaan_id'], 'integer'],
            [['isipertanyaan'], 'string', 'max' => 255],
            [['nourut', 'halaman', 'namahalaman'], 'string', 'max' => 100],
            [['isaktifpertanyaan'], 'string', 'max' => 2]
        ]);
    }
	
}
