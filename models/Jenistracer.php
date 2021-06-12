<?php

namespace app\models;

use Yii;
use \app\models\base\Jenistracer as BaseJenistracer;

/**
 * This is the model class for table "jenistracer".
 */
class Jenistracer extends BaseJenistracer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['namajenistracer'], 'required'],
            [['namajenistracer'], 'string', 'max' => 255]
        ]);
    }
	
}
