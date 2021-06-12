<?php

namespace app\models;

use Yii;
use \app\models\base\Asalsekolah as BaseAsalsekolah;

/**
 * This is the model class for table "asalsekolah".
 */
class Asalsekolah extends BaseAsalsekolah
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['namaasalsekolah'], 'string', 'max' => 100]
        ]);
    }
	
}
