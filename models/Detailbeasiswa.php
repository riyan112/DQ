<?php

namespace app\models;

use Yii;
use \app\models\base\Detailbeasiswa as BaseDetailbeasiswa;

/**
 * This is the model class for table "detailbeasiswa".
 */
class Detailbeasiswa extends BaseDetailbeasiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['jenisbeasiswa_id', 'sumberbeasiswa_id'], 'integer'],
            [['nominalditerima'], 'number'],
            [['jangkawaktu'], 'string', 'max' => 10]
        ]);
    }
	
}
