<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "peringkat".
 *
 * @property integer $peringkat_id
 * @property string $keteranganperingkat
 *
 * @property \app\models\Detailprestasi[] $detailprestasis
 */
class Peringkat extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'detailprestasis'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['keteranganperingkat'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'peringkat';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'peringkat_id' => 'Peringkat ID',
            'keteranganperingkat' => 'Keteranganperingkat',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailprestasis()
    {
        return $this->hasMany(\app\models\Detailprestasi::className(), ['peringkat_id' => 'peringkat_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\PeringkatQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\PeringkatQuery(get_called_class());
    }
}
