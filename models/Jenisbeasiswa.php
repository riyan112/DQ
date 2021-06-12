<?php

namespace app\models;

use Yii;
use \app\models\base\Jenisbeasiswa as BaseJenisbeasiswa;

/**
 * This is the model class for table "jenisbeasiswa".
 */
class Jenisbeasiswa extends BaseJenisbeasiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['namabeasiswa'], 'string', 'max' => 100]
        ]);
    }
	
}
