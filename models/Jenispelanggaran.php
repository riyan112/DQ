<?php

namespace app\models;

use Yii;
use \app\models\base\Jenispelanggaran as BaseJenispelanggaran;

/**
 * This is the model class for table "jenispelanggaran".
 */
class Jenispelanggaran extends BaseJenispelanggaran
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['namapelanggran'], 'required'],
            [['namapelanggran'], 'string', 'max' => 100]
        ]);
    }
	
}
