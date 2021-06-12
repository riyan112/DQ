<?php

namespace app\models;

use Yii;
use \app\models\base\Statusasalsekolah as BaseStatusasalsekolah;

/**
 * This is the model class for table "statusasalsekolah".
 */
class Statusasalsekolah extends BaseStatusasalsekolah
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['namastatusasalsekolah'], 'string', 'max' => 10]
        ]);
    }
	
}
