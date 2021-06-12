<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "jenispertanyaan".
 *
 * @property integer $jenispertanyaan_id
 * @property string $keteranganpertanyaan
 *
 * @property \app\models\Pertanyaan[] $pertanyaans
 */
class Jenispertanyaan extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'pertanyaans'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['keteranganpertanyaan'], 'required'],
            [['keteranganpertanyaan'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jenispertanyaan';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jenispertanyaan_id' => 'Jenispertanyaan ID',
            'keteranganpertanyaan' => 'Keteranganpertanyaan',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPertanyaans()
    {
        return $this->hasMany(\app\models\Pertanyaan::className(), ['jenispertanyaan_id' => 'jenispertanyaan_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\JenispertanyaanQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\JenispertanyaanQuery(get_called_class());
    }
}
