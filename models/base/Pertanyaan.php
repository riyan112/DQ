<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "pertanyaan".
 *
 * @property integer $pertanyaan_id
 * @property integer $periodetracer_id
 * @property integer $jenistracer_id
 * @property integer $jenispertanyaan_id
 * @property string $isipertanyaan
 * @property string $nourut
 * @property string $halaman
 * @property string $namahalaman
 * @property integer $isaktifpertanyaan
 *
 * @property \app\models\Detailpengisiantracer[] $detailpengisiantracers
 * @property \app\models\Jawabantracer[] $jawabantracers
 * @property \app\models\Jenispertanyaan $jenispertanyaan
 * @property \app\models\Periodetracer $periodetracer
 * @property \app\models\Jenistracer $jenistracer
 */
class Pertanyaan extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'detailpengisiantracers',
            'jawabantracers',
            'jenispertanyaan',
            'periodetracer',
            'jenistracer'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['periodetracer_id', 'jenistracer_id', 'jenispertanyaan_id', 'isipertanyaan', 'nourut', 'halaman', 'namahalaman', 'isaktifpertanyaan'], 'required'],
            [['periodetracer_id', 'jenistracer_id', 'jenispertanyaan_id'], 'integer'],
            [['isipertanyaan'], 'string', 'max' => 255],
            [['nourut', 'halaman', 'namahalaman'], 'string', 'max' => 100],
            [['isaktifpertanyaan'], 'string', 'max' => 2]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pertanyaan';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pertanyaan_id' => 'Pertanyaan ID',
            'periodetracer_id' => 'Periodetracer ID',
            'jenistracer_id' => 'Jenistracer ID',
            'jenispertanyaan_id' => 'Jenispertanyaan ID',
            'isipertanyaan' => 'Isipertanyaan',
            'nourut' => 'Nourut',
            'halaman' => 'Halaman',
            'namahalaman' => 'Namahalaman',
            'isaktifpertanyaan' => 'Isaktifpertanyaan',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailpengisiantracers()
    {
        return $this->hasMany(\app\models\Detailpengisiantracer::className(), ['pertanyaan_id' => 'pertanyaan_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJawabantracers()
    {
        return $this->hasMany(\app\models\Jawabantracer::className(), ['pertanyaan_id' => 'pertanyaan_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenispertanyaan()
    {
        return $this->hasOne(\app\models\Jenispertanyaan::className(), ['jenispertanyaan_id' => 'jenispertanyaan_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeriodetracer()
    {
        return $this->hasOne(\app\models\Periodetracer::className(), ['periodetracer_id' => 'periodetracer_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenistracer()
    {
        return $this->hasOne(\app\models\Jenistracer::className(), ['jenistracer_id' => 'jenistracer_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\PertanyaanQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\PertanyaanQuery(get_called_class());
    }
}
