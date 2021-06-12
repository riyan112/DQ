<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "ekskul".
 *
 * @property integer $ekskul_id
 * @property integer $siswa_id
 * @property integer $jenisekskul_id
 * @property string $nilai
 * @property string $keterangan
 *
 * @property \app\models\Siswa $siswa
 * @property \app\models\Jenisekskul $jenisekskul
 * @property \app\models\Jadwalekskul[] $jadwalekskuls
 */
class Ekskul extends \yii\db\ActiveRecord
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
            'jenisekskul',
            'jadwalekskuls'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['siswa_id', 'jenisekskul_id', 'nilai', 'keterangan'], 'required'],
            [['siswa_id', 'jenisekskul_id'], 'integer'],
            [['nilai'], 'string', 'max' => 10],
            [['keterangan'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ekskul';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ekskul_id' => 'Ekskul ID',
            'siswa_id' => 'Siswa ID',
            'jenisekskul_id' => 'Jenisekskul ID',
            'nilai' => 'Nilai',
            'keterangan' => 'Keterangan',
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
    public function getJenisekskul()
    {
        return $this->hasOne(\app\models\Jenisekskul::className(), ['jenisekskul_id' => 'jenisekskul_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJadwalekskuls()
    {
        return $this->hasMany(\app\models\Jadwalekskul::className(), ['ekskul_id' => 'ekskul_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\EkskulQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\EkskulQuery(get_called_class());
    }
}
