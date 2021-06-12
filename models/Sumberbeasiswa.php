<?php

namespace app\models;

use Yii;
use \app\models\base\Sumberbeasiswa as BaseSumberbeasiswa;

/**
 * This is the model class for table "sumberbeasiswa".
 */
class Sumberbeasiswa extends BaseSumberbeasiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['namasumberbeasiswa'], 'string', 'max' => 100]
        ]);
    }
	
}
