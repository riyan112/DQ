<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "statusasalsekolah".
 *
 * @property integer $statusasalsekolah_id
 * @property string $namastatusasalsekolah
 *
 * @property \app\models\Siswa[] $siswas
 */
class Statusasalsekolah extends \yii\db\ActiveRecord
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
            [['namastatusasalsekolah'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'statusasalsekolah';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'statusasalsekolah_id' => 'Statusasalsekolah ID',
            'namastatusasalsekolah' => 'Namastatusasalsekolah',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiswas()
    {
        return $this->hasMany(\app\models\Siswa::className(), ['statusasalsekolah_id' => 'statusasalsekolah_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\StatusasalsekolahQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\StatusasalsekolahQuery(get_called_class());
    }
}
