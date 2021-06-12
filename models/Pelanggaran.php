<?php

namespace app\models;

use Yii;
use \app\models\base\Pelanggaran as BasePelanggaran;

/**
 * This is the model class for table "pelanggaran".
 */
class Pelanggaran extends BasePelanggaran
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['siswa_id', 'pegawai_id', 'jenispelanggaran_id', 'jeniskonseling_id', 'keteranganpelanggaran'], 'required'],
            [['siswa_id', 'jenispelanggaran_id', 'jeniskonseling_id'], 'integer'],
            [['pegawai_id'], 'string', 'max' => 20],
            [['keteranganpelanggaran'], 'string', 'max' => 255]
        ]);
    }
	
}
