<?php

namespace app\models;

use Yii;
use \app\models\base\Jenispertanyaan as BaseJenispertanyaan;

/**
 * This is the model class for table "jenispertanyaan".
 */
class Jenispertanyaan extends BaseJenispertanyaan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['keteranganpertanyaan'], 'required'],
            [['keteranganpertanyaan'], 'string', 'max' => 255]
        ]);
    }
	
}
