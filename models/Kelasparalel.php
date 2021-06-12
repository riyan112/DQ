<?php

namespace app\models;

use Yii;
use \app\models\base\Kelasparalel as BaseKelasparalel;

/**
 * This is the model class for table "kelasparalel".
 */
class Kelasparalel extends BaseKelasparalel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['namakelasparalel'], 'string', 'max' => 2],
            [['keterangan'], 'string', 'max' => 255]
        ]);
    }
	
}
