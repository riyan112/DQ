<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "jenjang".
 *
 * @property integer $jenjang_sekolah_id
 * @property string $nama_jenjang
 *
 * @property \app\models\Sekolah[] $sekolahs
 */
class Jenjang extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'sekolahs'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_jenjang'], 'required'],
            [['nama_jenjang'], 'string', 'max' => 11]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jenjang';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jenjang_sekolah_id' => 'Jenjang Sekolah ID',
            'nama_jenjang' => 'Nama Jenjang',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSekolahs()
    {
        return $this->hasMany(\app\models\Sekolah::className(), ['jenjang_sekolah_id' => 'jenjang_sekolah_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\JenjangQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\JenjangQuery(get_called_class());
    }
}
