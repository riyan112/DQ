<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "pendidikan".
 *
 * @property integer $pendidikan_id
 * @property string $namapendidikan
 *
 * @property \app\models\Siswa[] $siswas
 */
class Pendidikan extends \yii\db\ActiveRecord
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
            [['namapendidikan'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pendidikan';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pendidikan_id' => 'Pendidikan ID',
            'namapendidikan' => 'Namapendidikan',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiswas()
    {
        return $this->hasMany(\app\models\Siswa::className(), ['pendidikanibu_id' => 'pendidikan_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\PendidikanQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\PendidikanQuery(get_called_class());
    }
}
