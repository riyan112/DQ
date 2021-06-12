<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "alattransportasi".
 *
 * @property integer $alattransportasi_id
 * @property string $namaalattransportasi
 *
 * @property \app\models\Siswa[] $siswas
 */
class Alattransportasi extends \yii\db\ActiveRecord
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
            [['namaalattransportasi'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'alattransportasi';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'alattransportasi_id' => 'Alattransportasi ID',
            'namaalattransportasi' => 'Namaalattransportasi',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiswas()
    {
        return $this->hasMany(\app\models\Siswa::className(), ['alattransportasi_id' => 'alattransportasi_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\AlattransportasiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\AlattransportasiQuery(get_called_class());
    }
}
