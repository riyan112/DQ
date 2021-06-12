<?php

namespace app\models;

use Yii;
use \app\models\base\Citacita as BaseCitacita;

/**
 * This is the model class for table "citacita".
 */
class Citacita extends BaseCitacita
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['namacitacita'], 'string', 'max' => 100]
        ]);
    }
	
}
