<?php

namespace app\models;

use Yii;
use \app\models\base\Detailpengisiantracer as BaseDetailpengisiantracer;

/**
 * This is the model class for table "detailpengisiantracer".
 */
class Detailpengisiantracer extends BaseDetailpengisiantracer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['pengisiantracer_id', 'periodetracer_id', 'pertanyaan_id', 'jawaban_id', 'jawabanesai'], 'required'],
            [['pengisiantracer_id', 'periodetracer_id', 'pertanyaan_id', 'jawaban_id'], 'integer'],
            [['jawabanesai'], 'string', 'max' => 255]
        ]);
    }
	
}
