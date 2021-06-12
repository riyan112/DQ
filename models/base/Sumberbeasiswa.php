<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "sumberbeasiswa".
 *
 * @property integer $sumberbeasiswa_id
 * @property string $namasumberbeasiswa
 *
 * @property \app\models\Detailbeasiswa[] $detailbeasiswas
 */
class Sumberbeasiswa extends \yii\db\ActiveRecord
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
            [['namasumberbeasiswa'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sumberbeasiswa';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sumberbeasiswa_id' => 'Sumberbeasiswa ID',
            'namasumberbeasiswa' => 'Namasumberbeasiswa',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailbeasiswas()
    {
        return $this->hasMany(\app\models\Detailbeasiswa::className(), ['sumberbeasiswa_id' => 'sumberbeasiswa_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\SumberbeasiswaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\SumberbeasiswaQuery(get_called_class());
    }
}
