<?php

namespace app\models;

use Yii;
use \app\models\base\Jawabantracer as BaseJawabantracer;

/**
 * This is the model class for table "jawabantracer".
 */
class Jawabantracer extends BaseJawabantracer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['pertanyaan_id', 'jenisjawaban_id', 'isijawaban', 'nourut', 'bobot'], 'required'],
            [['pertanyaan_id', 'jenisjawaban_id'], 'integer'],
            [['nourut', 'bobot'], 'number'],
            [['isijawaban'], 'string', 'max' => 255]
        ]);
    }
	
}
