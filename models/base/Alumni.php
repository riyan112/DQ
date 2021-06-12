<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "alumni".
 *
 * @property integer $alumni_id
 * @property integer $siswa_id
 * @property string $nis
 * @property string $nisn
 * @property string $nik
 * @property string $namasiswa
 * @property string $tanggalproses
 * @property integer $isproses
 *
 * @property \app\models\Siswa $siswa
 * @property \app\models\Pengisiantracer[] $pengisiantracers
 */
class Alumni extends \yii\db\ActiveRecord
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
            'pengisiantracers'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['siswa_id', 'nis', 'nisn', 'nik', 'namasiswa', 'isproses'], 'required'],
            [['siswa_id'], 'integer'],
            [['tanggalproses'], 'safe'],
            [['nis', 'nisn'], 'string', 'max' => 20],
            [['nik'], 'string', 'max' => 16],
            [['namasiswa'], 'string', 'max' => 255],
            [['isproses'], 'string', 'max' => 11]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'alumni';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'alumni_id' => 'Alumni ID',
            'siswa_id' => 'Siswa ID',
            'nis' => 'Nis',
            'nisn' => 'Nisn',
            'nik' => 'Nik',
            'namasiswa' => 'Namasiswa',
            'tanggalproses' => 'Tanggalproses',
            'isproses' => 'Isproses',
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
    public function getPengisiantracers()
    {
        return $this->hasMany(\app\models\Pengisiantracer::className(), ['alumni_id' => 'alumni_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\AlumniQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\AlumniQuery(get_called_class());
    }
}
