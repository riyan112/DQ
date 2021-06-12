<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "pelanggaran".
 *
 * @property integer $pelanggaran_id
 * @property integer $siswa_id
 * @property string $pegawai_id
 * @property integer $jenispelanggaran_id
 * @property integer $jeniskonseling_id
 * @property string $keteranganpelanggaran
 *
 * @property \app\models\Siswa $siswa
 * @property \app\models\Jenispelanggaran $jenispelanggaran
 * @property \app\models\Jeniskonseling $jeniskonseling
 */
class Pelanggaran extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'siswa',
            'jenispelanggaran',
            'jeniskonseling'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['siswa_id', 'pegawai_id', 'jenispelanggaran_id', 'jeniskonseling_id', 'keteranganpelanggaran'], 'required'],
            [['siswa_id', 'jenispelanggaran_id', 'jeniskonseling_id'], 'integer'],
            [['pegawai_id'], 'string', 'max' => 20],
            [['keteranganpelanggaran'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pelanggaran';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pelanggaran_id' => 'Pelanggaran ID',
            'siswa_id' => 'Siswa ID',
            'pegawai_id' => 'Pegawai ID',
            'jenispelanggaran_id' => 'Jenispelanggaran ID',
            'jeniskonseling_id' => 'Jeniskonseling ID',
            'keteranganpelanggaran' => 'Keteranganpelanggaran',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiswa()
    {
        return $this->hasOne(\app\models\Siswa::className(), ['siswa_id' => 'siswa_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenispelanggaran()
    {
        return $this->hasOne(\app\models\Jenispelanggaran::className(), ['jenispelanggaran_id' => 'jenispelanggaran_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJeniskonseling()
    {
        return $this->hasOne(\app\models\Jeniskonseling::className(), ['jeniskonseling_id' => 'jeniskonseling_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\PelanggaranQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\PelanggaranQuery(get_called_class());
    }
}
