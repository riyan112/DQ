<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "hasilkaryasiswa".
 *
 * @property integer $hasilkaryasiswa_id
 * @property integer $siswa_id
 * @property integer $jeniskaryasiswa_id
 * @property string $judulkaryasiswa
 * @property string $keterangankaryasiswa
 * @property string $tgluploadkaryasiswa
 * @property string $portofolio
 *
 * @property \app\models\Jeniskaryasiswa $jeniskaryasiswa
 * @property \app\models\Siswa $siswa
 */
class Hasilkaryasiswa extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'jeniskaryasiswa',
            'siswa'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['siswa_id', 'jeniskaryasiswa_id', 'judulkaryasiswa', 'keterangankaryasiswa', 'tgluploadkaryasiswa', 'portofolio'], 'required'],
            [['siswa_id', 'jeniskaryasiswa_id'], 'integer'],
            [['tgluploadkaryasiswa'], 'safe'],
            [['judulkaryasiswa'], 'string', 'max' => 50],
            [['keterangankaryasiswa'], 'string', 'max' => 255],
            [['portofolio'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hasilkaryasiswa';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hasilkaryasiswa_id' => 'Hasilkaryasiswa ID',
            'siswa_id' => 'Siswa ID',
            'jeniskaryasiswa_id' => 'Jeniskaryasiswa ID',
            'judulkaryasiswa' => 'Judulkaryasiswa',
            'keterangankaryasiswa' => 'Keterangankaryasiswa',
            'tgluploadkaryasiswa' => 'Tgluploadkaryasiswa',
            'portofolio' => 'Portofolio',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJeniskaryasiswa()
    {
        return $this->hasOne(\app\models\Jeniskaryasiswa::className(), ['jeniskaryasiswa_id' => 'jeniskaryasiswa_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiswa()
    {
        return $this->hasOne(\app\models\Siswa::className(), ['siswa_id' => 'siswa_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\HasilkaryasiswaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\HasilkaryasiswaQuery(get_called_class());
    }
}
