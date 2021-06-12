<?php

namespace app\models;

use Yii;
use \app\models\base\Bidangprestasi as BaseBidangprestasi;

/**
 * This is the model class for table "bidangprestasi".
 */
class Bidangprestasi extends BaseBidangprestasi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['namabidangprestasi'], 'string', 'max' => 100]
        ]);
    }
	
}
