<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "agama".
 *
 * @property integer $agama_id
 * @property string $namaagama
 *
 * @property \app\models\Siswa[] $siswas
 */
class Agama extends \yii\db\ActiveRecord
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
            [['namaagama'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'agama';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'agama_id' => 'Agama ID',
            'namaagama' => 'Namaagama',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiswas()
    {
        return $this->hasMany(\app\models\Siswa::className(), ['agama_id' => 'agama_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\AgamaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\AgamaQuery(get_called_class());
    }
}
