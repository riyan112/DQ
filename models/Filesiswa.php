<?php

namespace app\models;

use Yii;
use \app\models\base\Filesiswa as BaseFilesiswa;

/**
 * This is the model class for table "filesiswa".
 */
class Filesiswa extends BaseFilesiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['namafilesiswa', 'ukuran', 'tgl_proses'], 'required'],
            [['ukuran'], 'integer'],
            [['tgl_upload', 'tgl_proses'], 'safe'],
            [['namafilesiswa'], 'string', 'max' => 50]
        ]);
    }
	
}
