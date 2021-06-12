<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "pengisiantracer".
 *
 * @property integer $pengisiantracer_id
 * @property integer $alumni_id
 * @property string $saran
 * @property string $keterangan
 *
 * @property \app\models\Detailpengisiantracer[] $detailpengisiantracers
 * @property \app\models\Alumni $alumni
 */
class Pengisiantracer extends \yii\db\ActiveRecord
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
            'alumni'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alumni_id', 'saran', 'keterangan'], 'required'],
            [['alumni_id'], 'integer'],
            [['saran', 'keterangan'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pengisiantracer';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pengisiantracer_id' => 'Pengisiantracer ID',
            'alumni_id' => 'Alumni ID',
            'saran' => 'Saran',
            'keterangan' => 'Keterangan',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailpengisiantracers()
    {
        return $this->hasMany(\app\models\Detailpengisiantracer::className(), ['pengisiantracer_id' => 'pengisiantracer_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlumni()
    {
        return $this->hasOne(\app\models\Alumni::className(), ['alumni_id' => 'alumni_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\PengisiantracerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\PengisiantracerQuery(get_called_class());
    }
}
