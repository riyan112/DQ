<?php

namespace app\models;

use Yii;
use \app\models\base\Jenisjawaban as BaseJenisjawaban;

/**
 * This is the model class for table "jenisjawaban".
 */
class Jenisjawaban extends BaseJenisjawaban
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['keteranganjawaban'], 'required'],
            [['keteranganjawaban'], 'string', 'max' => 255]
        ]);
    }
	
}
