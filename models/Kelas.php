<?php

namespace app\models;

use Yii;
use \app\models\base\Kelas as BaseKelas;

/**
 * This is the model class for table "kelas".
 */
class Kelas extends BaseKelas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['namakelas'], 'string', 'max' => 20]
        ]);
    }
	
}
