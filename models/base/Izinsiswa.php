<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "izinsiswa".
 *
 * @property integer $izinsiswa_id
 * @property integer $siswa_id
 * @property string $keterangan_izin
 * @property string $tgl_izin
 * @property string $bukti
 *
 * @property \app\models\Siswa $siswa
 * @property \app\models\Presensisiswa[] $presensisiswas
 */
class Izinsiswa extends \yii\db\ActiveRecord
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
            'presensisiswas'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['siswa_id', 'keterangan_izin', 'tgl_izin', 'bukti'], 'required'],
            [['siswa_id'], 'integer'],
            [['tgl_izin'], 'safe'],
            [['keterangan_izin'], 'string', 'max' => 25],
            [['bukti'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'izinsiswa';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'izinsiswa_id' => 'Izinsiswa ID',
            'siswa_id' => 'Siswa ID',
            'keterangan_izin' => 'Keterangan Izin',
            'tgl_izin' => 'Tgl Izin',
            'bukti' => 'Bukti',
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
    public function getPresensisiswas()
    {
        return $this->hasMany(\app\models\Presensisiswa::className(), ['izinsiswa_id' => 'izinsiswa_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\IzinsiswaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\IzinsiswaQuery(get_called_class());
    }
}
