<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "jaraklokasisiswa".
 *
 * @property integer $jaraklokasisiswa_id
 * @property string $namajaraklokasisiswa
 *
 * @property \app\models\Siswa[] $siswas
 */
class Jaraklokasisiswa extends \yii\db\ActiveRecord
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
            [['namajaraklokasisiswa'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jaraklokasisiswa';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jaraklokasisiswa_id' => 'Jaraklokasisiswa ID',
            'namajaraklokasisiswa' => 'Namajaraklokasisiswa',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiswas()
    {
        return $this->hasMany(\app\models\Siswa::className(), ['jaraklokasisiswa_id' => 'jaraklokasisiswa_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\JaraklokasisiswaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\JaraklokasisiswaQuery(get_called_class());
    }
}
