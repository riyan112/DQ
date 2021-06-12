<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "jenisjawaban".
 *
 * @property integer $jenisjawaban_id
 * @property string $keteranganjawaban
 *
 * @property \app\models\Jawabantracer[] $jawabantracers
 */
class Jenisjawaban extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'jawabantracers'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['keteranganjawaban'], 'required'],
            [['keteranganjawaban'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jenisjawaban';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jenisjawaban_id' => 'Jenisjawaban ID',
            'keteranganjawaban' => 'Keteranganjawaban',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJawabantracers()
    {
        return $this->hasMany(\app\models\Jawabantracer::className(), ['jenisjawaban_id' => 'jenisjawaban_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\JenisjawabanQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\JenisjawabanQuery(get_called_class());
    }
}
