<?php

namespace app\models;

use Yii;
use \app\models\base\Filezip as BaseFilezip;

/**
 * This is the model class for table "filezip".
 */
class Filezip extends BaseFilezip
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['namafilezip', 'ukuran'], 'required'],
            [['ukuran'], 'integer'],
            [['tgl_upload'], 'safe'],
            [['namafilezip'], 'string', 'max' => 50]
        ]);
    }
	
}
