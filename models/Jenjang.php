<?php

namespace app\models;

use Yii;
use \app\models\base\Jenjang as BaseJenjang;

/**
 * This is the model class for table "jenjang".
 */
class Jenjang extends BaseJenjang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['nama_jenjang'], 'required'],
            [['nama_jenjang'], 'string', 'max' => 11]
        ]);
    }
	
}
