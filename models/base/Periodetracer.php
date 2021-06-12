<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "periodetracer".
 *
 * @property integer $periodetracer_id
 * @property integer $jenistracer_id
 * @property string $keteranganperiodetracer
 * @property string $tahun
 * @property integer $isaktifperiode
 *
 * @property \app\models\Detailpengisiantracer[] $detailpengisiantracers
 * @property \app\models\Jenistracer $jenistracer
 * @property \app\models\Pertanyaan[] $pertanyaans
 */
class Periodetracer extends \yii\db\ActiveRecord
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
            'jenistracer',
            'pertanyaans'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jenistracer_id', 'keteranganperiodetracer', 'tahun', 'isaktifperiode'], 'required'],
            [['jenistracer_id'], 'integer'],
            [['keteranganperiodetracer'], 'string', 'max' => 100],
            [['tahun'], 'string', 'max' => 5],
            [['isaktifperiode'], 'string', 'max' => 11]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'periodetracer';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'periodetracer_id' => 'Periodetracer ID',
            'jenistracer_id' => 'Jenistracer ID',
            'keteranganperiodetracer' => 'Keteranganperiodetracer',
            'tahun' => 'Tahun',
            'isaktifperiode' => 'Isaktifperiode',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailpengisiantracers()
    {
        return $this->hasMany(\app\models\Detailpengisiantracer::className(), ['periodetracer_id' => 'periodetracer_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenistracer()
    {
        return $this->hasOne(\app\models\Jenistracer::className(), ['jenistracer_id' => 'jenistracer_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPertanyaans()
    {
        return $this->hasMany(\app\models\Pertanyaan::className(), ['periodetracer_id' => 'periodetracer_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\PeriodetracerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\PeriodetracerQuery(get_called_class());
    }
}
