<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "kelas".
 *
 * @property integer $kelas_id
 * @property string $namakelas
 *
 * @property \app\models\Siswa[] $siswas
 */
class Kelas extends \yii\db\ActiveRecord
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
            [['namakelas'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kelas';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kelas_id' => 'Kelas ID',
            'namakelas' => 'Namakelas',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiswas()
    {
        return $this->hasMany(\app\models\Siswa::className(), ['kelas_id' => 'kelas_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\KelasQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\KelasQuery(get_called_class());
    }
}
