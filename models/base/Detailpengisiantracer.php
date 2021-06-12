<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "detailpengisiantracer".
 *
 * @property integer $detailpengisiantracer_id
 * @property integer $pengisiantracer_id
 * @property integer $periodetracer_id
 * @property integer $pertanyaan_id
 * @property integer $jawaban_id
 * @property string $jawabanesai
 *
 * @property \app\models\Pengisiantracer $pengisiantracer
 * @property \app\models\Periodetracer $periodetracer
 * @property \app\models\Pertanyaan $pertanyaan
 * @property \app\models\Jawabantracer $jawaban
 */
class Detailpengisiantracer extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'pengisiantracer',
            'periodetracer',
            'pertanyaan',
            'jawaban'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pengisiantracer_id', 'periodetracer_id', 'pertanyaan_id', 'jawaban_id', 'jawabanesai'], 'required'],
            [['pengisiantracer_id', 'periodetracer_id', 'pertanyaan_id', 'jawaban_id'], 'integer'],
            [['jawabanesai'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detailpengisiantracer';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'detailpengisiantracer_id' => 'Detailpengisiantracer ID',
            'pengisiantracer_id' => 'Pengisiantracer ID',
            'periodetracer_id' => 'Periodetracer ID',
            'pertanyaan_id' => 'Pertanyaan ID',
            'jawaban_id' => 'Jawaban ID',
            'jawabanesai' => 'Jawabanesai',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPengisiantracer()
    {
        return $this->hasOne(\app\models\Pengisiantracer::className(), ['pengisiantracer_id' => 'pengisiantracer_id']);
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
    public function getPertanyaan()
    {
        return $this->hasOne(\app\models\Pertanyaan::className(), ['pertanyaan_id' => 'pertanyaan_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJawaban()
    {
        return $this->hasOne(\app\models\Jawabantracer::className(), ['jawaban_id' => 'jawaban_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\DetailpengisiantracerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\DetailpengisiantracerQuery(get_called_class());
    }
}
