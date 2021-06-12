<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "jenistracer".
 *
 * @property integer $jenistracer_id
 * @property string $namajenistracer
 *
 * @property \app\models\Periodetracer[] $periodetracers
 * @property \app\models\Pertanyaan[] $pertanyaans
 */
class Jenistracer extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'periodetracers',
            'pertanyaans'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['namajenistracer'], 'required'],
            [['namajenistracer'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jenistracer';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jenistracer_id' => 'Jenistracer ID',
            'namajenistracer' => 'Namajenistracer',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeriodetracers()
    {
        return $this->hasMany(\app\models\Periodetracer::className(), ['jenistracer_id' => 'jenistracer_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPertanyaans()
    {
        return $this->hasMany(\app\models\Pertanyaan::className(), ['jenistracer_id' => 'jenistracer_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\JenistracerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\JenistracerQuery(get_called_class());
    }
}
