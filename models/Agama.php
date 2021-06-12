<?php

namespace app\models;

use Yii;
use \app\models\base\Agama as BaseAgama;

/**
 * This is the model class for table "agama".
 */
class Agama extends BaseAgama
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['namaagama'], 'string', 'max' => 50]
        ]);
    }
	
}
