<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "jenisasalsekolah".
 *
 * @property integer $jenisasalsekolah_id
 * @property string $namaasalsekolah
 *
 * @property \app\models\Siswa[] $siswas
 */
class Jenisasalsekolah extends \yii\db\ActiveRecord
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
        return 'jenisasalsekolah';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jenisasalsekolah_id' => 'Jenisasalsekolah ID',
            'namaasalsekolah' => 'Namaasalsekolah',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiswas()
    {
        return $this->hasMany(\app\models\Siswa::className(), ['jenisasalsekolah_id' => 'jenisasalsekolah_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\JenisasalsekolahQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\JenisasalsekolahQuery(get_called_class());
    }
}
