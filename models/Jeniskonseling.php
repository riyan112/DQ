<?php

namespace app\models;

use Yii;
use \app\models\base\Jeniskonseling as BaseJeniskonseling;

/**
 * This is the model class for table "jeniskonseling".
 */
class Jeniskonseling extends BaseJeniskonseling
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['namakonseling'], 'required'],
            [['namakonseling'], 'string', 'max' => 100]
        ]);
    }
	
}
