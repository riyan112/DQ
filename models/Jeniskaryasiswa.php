<?php

namespace app\models;

use Yii;
use \app\models\base\Jeniskaryasiswa as BaseJeniskaryasiswa;

/**
 * This is the model class for table "jeniskaryasiswa".
 */
class Jeniskaryasiswa extends BaseJeniskaryasiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['namajeniskaryasiswa'], 'required'],
            [['namajeniskaryasiswa'], 'string', 'max' => 50]
        ]);
    }
	
}
