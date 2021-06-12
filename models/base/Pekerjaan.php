<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "pekerjaan".
 *
 * @property integer $pekerjaan_id
 * @property string $namapekerjaan
 *
 * @property \app\models\Siswa[] $siswas
 */
class Pekerjaan extends \yii\db\ActiveRecord
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
            [['namapekerjaan'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pekerjaan';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pekerjaan_id' => 'Pekerjaan ID',
            'namapekerjaan' => 'Namapekerjaan',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiswas()
    {
        return $this->hasMany(\app\models\Siswa::className(), ['pekerjaanibu_id' => 'pekerjaan_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\PekerjaanQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\PekerjaanQuery(get_called_class());
    }
}
