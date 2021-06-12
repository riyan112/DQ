<?php

namespace app\models;

use Yii;
use \app\models\base\Statussiswa as BaseStatussiswa;

/**
 * This is the model class for table "statussiswa".
 */
class Statussiswa extends BaseStatussiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['namastatussiswa'], 'string', 'max' => 100]
        ]);
    }
	
}
