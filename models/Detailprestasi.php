<?php

namespace app\models;

use Yii;
use \app\models\base\Detailprestasi as BaseDetailprestasi;

/**
 * This is the model class for table "detailprestasi".
 */
class Detailprestasi extends BaseDetailprestasi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['siswa_id', 'bidangprestasi_id', 'tingkatprestasi_id', 'peringkat_id'], 'integer'],
            [['tahunmeraihprestasi'], 'string', 'max' => 5]
        ]);
    }
	
}
