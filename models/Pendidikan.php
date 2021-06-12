<?php

namespace app\models;

use Yii;
use \app\models\base\Pendidikan as BasePendidikan;

/**
 * This is the model class for table "pendidikan".
 */
class Pendidikan extends BasePendidikan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['namapendidikan'], 'string', 'max' => 100]
        ]);
    }
	
}
