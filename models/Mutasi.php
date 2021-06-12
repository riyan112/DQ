<?php

namespace app\models;

use Yii;
use \app\models\base\Mutasi as BaseMutasi;

/**
 * This is the model class for table "mutasi".
 */
class Mutasi extends BaseMutasi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['siswa_id', 'keteranganmutasi', 'isapproval'], 'required'],
            [['siswa_id', 'isapproval'], 'integer'],
            [['tgl_mutasi', 'tgl_approval'], 'safe'],
            [['keteranganmutasi'], 'string', 'max' => 100]
        ]);
    }
	
}
