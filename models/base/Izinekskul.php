<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "izinekskul".
 *
 * @property integer $izinekskul_id
 * @property integer $siswa_id
 * @property string $keteranganizinekskul
 * @property string $tgl_izinekskul
 * @property string $buktiizinekskul
 *
 * @property \app\models\Siswa $siswa
 * @property \app\models\Presensiekskul[] $presensiekskuls
 */
class Izinekskul extends \yii\db\ActiveRecord
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
            'presensiekskuls'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['siswa_id', 'keteranganizinekskul', 'tgl_izinekskul', 'buktiizinekskul'], 'required'],
            [['siswa_id'], 'integer'],
            [['tgl_izinekskul'], 'safe'],
            [['keteranganizinekskul'], 'string', 'max' => 25],
            [['buktiizinekskul'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'izinekskul';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'izinekskul_id' => 'Izinekskul ID',
            'siswa_id' => 'Siswa ID',
            'keteranganizinekskul' => 'Keteranganizinekskul',
            'tgl_izinekskul' => 'Tgl Izinekskul',
            'buktiizinekskul' => 'Buktiizinekskul',
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
    public function getPresensiekskuls()
    {
        return $this->hasMany(\app\models\Presensiekskul::className(), ['izinekskul_id' => 'izinekskul_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\IzinekskulQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\IzinekskulQuery(get_called_class());
    }
}
