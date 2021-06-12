<?php

namespace app\models;

use Yii;
use \app\models\base\Pengisiantracer as BasePengisiantracer;

/**
 * This is the model class for table "pengisiantracer".
 */
class Pengisiantracer extends BasePengisiantracer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['alumni_id', 'saran', 'keterangan'], 'required'],
            [['alumni_id'], 'integer'],
            [['saran', 'keterangan'], 'string', 'max' => 255]
        ]);
    }
	
}
