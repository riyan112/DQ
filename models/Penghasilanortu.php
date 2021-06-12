<?php

namespace app\models;

use Yii;
use \app\models\base\Penghasilanortu as BasePenghasilanortu;

/**
 * This is the model class for table "penghasilanortu".
 */
class Penghasilanortu extends BasePenghasilanortu
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['keteranganpenghasilanortu'], 'string', 'max' => 100]
        ]);
    }
	
}
