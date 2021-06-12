<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "asalsekolah".
 *
 * @property integer $asalsekolah_id
 * @property string $namaasalsekolah
 *
 * @property \app\models\Siswa[] $siswas
 */
class Asalsekolah extends \yii\db\ActiveRecord
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
            [['namaasalsekolah'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'asalsekolah';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'asalsekolah_id' => 'Asalsekolah ID',
            'namaasalsekolah' => 'Namaasalsekolah',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiswas()
    {
        return $this->hasMany(\app\models\Siswa::className(), ['asalsekolah_id' => 'asalsekolah_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\AsalsekolahQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\AsalsekolahQuery(get_called_class());
    }
}
