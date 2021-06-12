<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "jeniskaryasiswa".
 *
 * @property integer $jeniskaryasiswa_id
 * @property string $namajeniskaryasiswa
 *
 * @property \app\models\Hasilkaryasiswa[] $hasilkaryasiswas
 */
class Jeniskaryasiswa extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'hasilkaryasiswas'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['namajeniskaryasiswa'], 'required'],
            [['namajeniskaryasiswa'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jeniskaryasiswa';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jeniskaryasiswa_id' => 'Jeniskaryasiswa ID',
            'namajeniskaryasiswa' => 'Namajeniskaryasiswa',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHasilkaryasiswas()
    {
        return $this->hasMany(\app\models\Hasilkaryasiswa::className(), ['jeniskaryasiswa_id' => 'jeniskaryasiswa_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\JeniskaryasiswaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\JeniskaryasiswaQuery(get_called_class());
    }
}
