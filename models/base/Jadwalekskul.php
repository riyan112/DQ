<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "jadwalekskul".
 *
 * @property string $jadwalekskul_id
 * @property integer $ekskul_id
 * @property string $jadwal_masukekskul
 * @property string $jadwal_pulangekskul
 * @property string $batas_awal_masukekskul
 * @property string $batas_akhir_masukekskul
 * @property string $batas_awal_pulangekskul
 * @property string $batas_akhir_pulangekskul
 * @property integer $isaktif
 *
 * @property \app\models\Ekskul $ekskul
 * @property \app\models\Presensiekskul[] $presensiekskuls
 */
class Jadwalekskul extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'ekskul',
            'presensiekskuls'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jadwalekskul_id', 'ekskul_id', 'jadwal_masukekskul', 'jadwal_pulangekskul', 'batas_awal_masukekskul', 'batas_akhir_masukekskul', 'batas_awal_pulangekskul', 'batas_akhir_pulangekskul', 'isaktif'], 'required'],
            [['ekskul_id'], 'integer'],
            [['jadwal_masukekskul', 'jadwal_pulangekskul', 'batas_awal_masukekskul', 'batas_akhir_masukekskul', 'batas_awal_pulangekskul', 'batas_akhir_pulangekskul'], 'safe'],
            [['jadwalekskul_id'], 'string', 'max' => 11],
            [['isaktif'], 'string', 'max' => 4]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jadwalekskul';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jadwalekskul_id' => 'Jadwalekskul ID',
            'ekskul_id' => 'Ekskul ID',
            'jadwal_masukekskul' => 'Jadwal Masukekskul',
            'jadwal_pulangekskul' => 'Jadwal Pulangekskul',
            'batas_awal_masukekskul' => 'Batas Awal Masukekskul',
            'batas_akhir_masukekskul' => 'Batas Akhir Masukekskul',
            'batas_awal_pulangekskul' => 'Batas Awal Pulangekskul',
            'batas_akhir_pulangekskul' => 'Batas Akhir Pulangekskul',
            'isaktif' => 'Isaktif',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEkskul()
    {
        return $this->hasOne(\app\models\Ekskul::className(), ['ekskul_id' => 'ekskul_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPresensiekskuls()
    {
        return $this->hasMany(\app\models\Presensiekskul::className(), ['jadwalekskul_id' => 'jadwalekskul_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\JadwalekskulQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\JadwalekskulQuery(get_called_class());
    }
}
