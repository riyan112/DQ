<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "citacita".
 *
 * @property integer $citacita_id
 * @property string $namacitacita
 *
 * @property \app\models\Siswa[] $siswas
 */
class Citacita extends \yii\db\ActiveRecord
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
            [['namacitacita'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'citacita';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'citacita_id' => 'Citacita ID',
            'namacitacita' => 'Namacitacita',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiswas()
    {
        return $this->hasMany(\app\models\Siswa::className(), ['citacita_id' => 'citacita_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\CitacitaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\CitacitaQuery(get_called_class());
    }
}
