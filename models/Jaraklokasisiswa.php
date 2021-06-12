<?php

namespace app\models;

use Yii;
use \app\models\base\Jaraklokasisiswa as BaseJaraklokasisiswa;

/**
 * This is the model class for table "jaraklokasisiswa".
 */
class Jaraklokasisiswa extends BaseJaraklokasisiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['namajaraklokasisiswa'], 'string', 'max' => 10]
        ]);
    }
	
}
