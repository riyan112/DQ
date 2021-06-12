<?php

namespace app\models;

use Yii;
use \app\models\base\Peringkat as BasePeringkat;

/**
 * This is the model class for table "peringkat".
 */
class Peringkat extends BasePeringkat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['keteranganperingkat'], 'string', 'max' => 255]
        ]);
    }
	
}
