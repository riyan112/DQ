<?php

namespace app\models;

use Yii;
use \app\models\base\Jeniskelamin as BaseJeniskelamin;

/**
 * This is the model class for table "jeniskelamin".
 */
class Jeniskelamin extends BaseJeniskelamin
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['jeniskelamin_id'], 'required'],
            [['jeniskelamin_id'], 'string', 'max' => 1],
            [['namajeniskelamin'], 'string', 'max' => 50]
        ]);
    }
	
}
