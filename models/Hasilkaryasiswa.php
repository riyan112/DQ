<?php

namespace app\models;

use Yii;
use \app\models\base\Hasilkaryasiswa as BaseHasilkaryasiswa;

/**
 * This is the model class for table "hasilkaryasiswa".
 */
class Hasilkaryasiswa extends BaseHasilkaryasiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['siswa_id', 'jeniskaryasiswa_id', 'judulkaryasiswa', 'keterangankaryasiswa', 'tgluploadkaryasiswa', 'portofolio'], 'required'],
            [['siswa_id', 'jeniskaryasiswa_id'], 'integer'],
            [['tgluploadkaryasiswa'], 'safe'],
            [['judulkaryasiswa'], 'string', 'max' => 50],
            [['keterangankaryasiswa'], 'string', 'max' => 255],
            [['portofolio'], 'string', 'max' => 200]
        ]);
    }
	
}
