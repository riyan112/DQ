<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "bidangprestasi".
 *
 * @property integer $bidangprestasi_id
 * @property string $namabidangprestasi
 *
 * @property \app\models\Detailprestasi[] $detailprestasis
 */
class Bidangprestasi extends \yii\db\ActiveRecord
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
            [['namabidangprestasi'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bidangprestasi';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bidangprestasi_id' => 'Bidangprestasi ID',
            'namabidangprestasi' => 'Namabidangprestasi',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailprestasis()
    {
        return $this->hasMany(\app\models\Detailprestasi::className(), ['bidangprestasi_id' => 'bidangprestasi_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\BidangprestasiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\BidangprestasiQuery(get_called_class());
    }
}
