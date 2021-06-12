<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "kelasparalel".
 *
 * @property integer $kelasparalel_id
 * @property string $namakelasparalel
 * @property string $keterangan
 *
 * @property \app\models\Siswa[] $siswas
 */
class Kelasparalel extends \yii\db\ActiveRecord
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
            [['namakelasparalel'], 'string', 'max' => 2],
            [['keterangan'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kelasparalel';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kelasparalel_id' => 'Kelasparalel ID',
            'namakelasparalel' => 'Namakelasparalel',
            'keterangan' => 'Keterangan',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiswas()
    {
        return $this->hasMany(\app\models\Siswa::className(), ['kelasparalel_id' => 'kelasparalel_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\KelasparalelQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\KelasparalelQuery(get_called_class());
    }
}
