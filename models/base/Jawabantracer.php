<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "jawabantracer".
 *
 * @property integer $jawaban_id
 * @property integer $pertanyaan_id
 * @property integer $jenisjawaban_id
 * @property string $isijawaban
 * @property string $nourut
 * @property string $bobot
 *
 * @property \app\models\Detailpengisiantracer[] $detailpengisiantracers
 * @property \app\models\Jenisjawaban $jenisjawaban
 * @property \app\models\Pertanyaan $pertanyaan
 */
class Jawabantracer extends \yii\db\ActiveRecord
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
            'jenisjawaban',
            'pertanyaan'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pertanyaan_id', 'jenisjawaban_id', 'isijawaban', 'nourut', 'bobot'], 'required'],
            [['pertanyaan_id', 'jenisjawaban_id'], 'integer'],
            [['nourut', 'bobot'], 'number'],
            [['isijawaban'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jawabantracer';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jawaban_id' => 'Jawaban ID',
            'pertanyaan_id' => 'Pertanyaan ID',
            'jenisjawaban_id' => 'Jenisjawaban ID',
            'isijawaban' => 'Isijawaban',
            'nourut' => 'Nourut',
            'bobot' => 'Bobot',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailpengisiantracers()
    {
        return $this->hasMany(\app\models\Detailpengisiantracer::className(), ['jawaban_id' => 'jawaban_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenisjawaban()
    {
        return $this->hasOne(\app\models\Jenisjawaban::className(), ['jenisjawaban_id' => 'jenisjawaban_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPertanyaan()
    {
        return $this->hasOne(\app\models\Pertanyaan::className(), ['pertanyaan_id' => 'pertanyaan_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\JawabantracerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\JawabantracerQuery(get_called_class());
    }
}
