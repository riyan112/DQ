<?php

namespace app\models;

use Yii;
use \app\models\base\Pekerjaan as BasePekerjaan;

/**
 * This is the model class for table "pekerjaan".
 */
class Pekerjaan extends BasePekerjaan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['namapekerjaan'], 'string', 'max' => 200]
        ]);
    }
	
}
