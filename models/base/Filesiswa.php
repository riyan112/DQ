<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "filesiswa".
 *
 * @property integer $filesiswa_id
 * @property string $namafilesiswa
 * @property integer $ukuran
 * @property string $tgl_upload
 * @property string $tgl_proses
 */
class Filesiswa extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;
    


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            ''
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            
            //[['namafilesiswa', 'ukuran', 'tgl_proses'], 'required'],
            [['filesiswa_id'], 'required'],
            [['ukuran'], 'integer'],
            [['tgl_upload', 'tgl_proses'], 'safe'],
            [['filesiswa_id'], 'unique'],
            [['namafilesiswa'], 'file', 'extensions' => 'xlsx', 'on' => 'create', 'skipOnEmpty' => false],
 
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'filesiswa';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'filesiswa_id' => 'Filesiswa ID',
            'namafilesiswa' => 'Nama File Siswa',
            'ukuran' => 'Ukuran',
            'tgl_upload' => 'Tgl Upload',
            'tgl_proses' => 'Tgl Proses',
        ];
    }


    /**
     * @inheritdoc
     * @return \app\models\FilesiswaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\FilesiswaQuery(get_called_class());
    }
}
