<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "tingkatprestasi".
 *
 * @property integer $tingkatprestasi_id
 * @property string $keterangantingkatprestasi
 *
 * @property \app\models\Detailprestasi[] $detailprestasis
 */
class Tingkatprestasi extends \yii\db\ActiveRecord
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
            [['keterangantingkatprestasi'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tingkatprestasi';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tingkatprestasi_id' => 'Tingkatprestasi ID',
            'keterangantingkatprestasi' => 'Keterangantingkatprestasi',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailprestasis()
    {
        return $this->hasMany(\app\models\Detailprestasi::className(), ['tingkatprestasi_id' => 'tingkatprestasi_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\TingkatprestasiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\TingkatprestasiQuery(get_called_class());
    }
}
