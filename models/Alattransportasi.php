<?php

namespace app\models;

use Yii;
use \app\models\base\Alattransportasi as BaseAlattransportasi;

/**
 * This is the model class for table "alattransportasi".
 */
class Alattransportasi extends BaseAlattransportasi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['namaalattransportasi'], 'string', 'max' => 100]
        ]);
    }
	
}
