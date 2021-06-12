<?php

namespace app\models;

use Yii;
use \app\models\base\Periodetracer as BasePeriodetracer;

/**
 * This is the model class for table "periodetracer".
 */
class Periodetracer extends BasePeriodetracer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['jenistracer_id', 'keteranganperiodetracer', 'tahun', 'isaktifperiode'], 'required'],
            [['jenistracer_id'], 'integer'],
            [['keteranganperiodetracer'], 'string', 'max' => 100],
            [['tahun'], 'string', 'max' => 5],
            [['isaktifperiode'], 'string', 'max' => 11]
        ]);
    }
	
}
