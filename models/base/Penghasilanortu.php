<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "penghasilanortu".
 *
 * @property integer $penghasilanortu_id
 * @property string $keteranganpenghasilanortu
 *
 * @property \app\models\Siswa[] $siswas
 */
class Penghasilanortu extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'siswas'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['keteranganpenghasilanortu'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penghasilanortu';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'penghasilanortu_id' => 'Penghasilanortu ID',
            'keteranganpenghasilanortu' => 'Keteranganpenghasilanortu',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiswas()
    {
        return $this->hasMany(\app\models\Siswa::className(), ['penghasilanortu_id' => 'penghasilanortu_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\PenghasilanortuQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\PenghasilanortuQuery(get_called_class());
    }
}
