<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "jenisbeasiswa".
 *
 * @property integer $jenisbeasiswa_id
 * @property string $namabeasiswa
 *
 * @property \app\models\Detailbeasiswa[] $detailbeasiswas
 */
class Jenisbeasiswa extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'detailbeasiswas'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['namabeasiswa'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jenisbeasiswa';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jenisbeasiswa_id' => 'Jenisbeasiswa ID',
            'namabeasiswa' => 'Namabeasiswa',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailbeasiswas()
    {
        return $this->hasMany(\app\models\Detailbeasiswa::className(), ['jenisbeasiswa_id' => 'jenisbeasiswa_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\JenisbeasiswaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\JenisbeasiswaQuery(get_called_class());
    }
}
