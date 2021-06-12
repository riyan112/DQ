<?php

namespace app\models;

use Yii;
use \app\models\base\Tingkatprestasi as BaseTingkatprestasi;

/**
 * This is the model class for table "tingkatprestasi".
 */
class Tingkatprestasi extends BaseTingkatprestasi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['keterangantingkatprestasi'], 'string', 'max' => 255]
        ]);
    }
	
}
