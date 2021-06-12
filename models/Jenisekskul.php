<?php

namespace app\models;

use Yii;
use \app\models\base\Jenisekskul as BaseJenisekskul;

/**
 * This is the model class for table "jenisekskul".
 */
class Jenisekskul extends BaseJenisekskul
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['namaekskul'], 'required'],
            [['namaekskul'], 'string', 'max' => 30]
        ]);
    }
	
}
