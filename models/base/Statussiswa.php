<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "statussiswa".
 *
 * @property integer $statussiswa_id
 * @property string $namastatussiswa
 *
 * @property \app\models\Siswa[] $siswas
 */
class Statussiswa extends \yii\db\ActiveRecord
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
            [['namastatussiswa'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'statussiswa';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'statussiswa_id' => 'Statussiswa ID',
            'namastatussiswa' => 'Namastatussiswa',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiswas()
    {
        return $this->hasMany(\app\models\Siswa::className(), ['statussiswa_id' => 'statussiswa_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\StatussiswaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\StatussiswaQuery(get_called_class());
    }
}
