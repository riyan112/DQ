<?php

namespace app\models;

use Yii;
use \app\models\base\Hobi as BaseHobi;

/**
 * This is the model class for table "hobi".
 */
class Hobi extends BaseHobi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['namahobi'], 'string', 'max' => 100]
        ]);
    }
	
}
