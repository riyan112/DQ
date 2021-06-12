<?php

namespace app\models;

use Yii;
use \app\models\base\Sekolah as BaseSekolah;

/**
 * This is the model class for table "sekolah".
 */
class Sekolah extends BaseSekolah
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['jenjang_sekolah_id', 'nsm', 'npsn', 'nama_sekolah', 'alamat_sekolah', 'kelurahan', 'kecamatan', 'kabupaten', 'provinsi', 'kode_pos'], 'required'],
            [['jenjang_sekolah_id', 'nsm', 'npsn', 'kode_pos'], 'integer'],
            [['nama_sekolah', 'kelurahan', 'kecamatan', 'kabupaten', 'provinsi'], 'string', 'max' => 50],
            [['alamat_sekolah'], 'string', 'max' => 100]
        ]);
    }
	
}
