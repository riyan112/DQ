<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "jeniskelamin".
 *
 * @property string $jeniskelamin_id
 * @property string $namajeniskelamin
 *
 * @property \app\models\Siswa[] $siswas
 */
class Jeniskelamin extends \yii\db\ActiveRecord
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
            [['jeniskelamin_id'], 'required'],
            [['jeniskelamin_id'], 'string', 'max' => 1],
            [['namajeniskelamin'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jeniskelamin';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jeniskelamin_id' => 'Jeniskelamin ID',
            'namajeniskelamin' => 'Namajeniskelamin',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiswas()
    {
        return $this->hasMany(\app\models\Siswa::className(), ['jeniskelamin_id' => 'jeniskelamin_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\JeniskelaminQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\JeniskelaminQuery(get_called_class());
    }
}
