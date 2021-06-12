<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "hobi".
 *
 * @property integer $hobi_id
 * @property string $namahobi
 *
 * @property \app\models\Siswa[] $siswas
 */
class Hobi extends \yii\db\ActiveRecord
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
            [['namahobi'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hobi';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hobi_id' => 'Hobi ID',
            'namahobi' => 'Namahobi',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiswas()
    {
        return $this->hasMany(\app\models\Siswa::className(), ['hobi_id' => 'hobi_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\HobiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\HobiQuery(get_called_class());
    }
}
