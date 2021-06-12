<?php

namespace app\models;

use Yii;
use \app\models\base\Jenisasalsekolah as BaseJenisasalsekolah;

/**
 * This is the model class for table "jenisasalsekolah".
 */
class Jenisasalsekolah extends BaseJenisasalsekolah
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
