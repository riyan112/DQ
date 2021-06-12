<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "jeniskonseling".
 *
 * @property integer $jeniskonseling_id
 * @property string $namakonseling
 *
 * @property \app\models\Pelanggaran[] $pelanggarans
 */
class Jeniskonseling extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'pelanggarans'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['namakonseling'], 'required'],
            [['namakonseling'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jeniskonseling';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jeniskonseling_id' => 'Jeniskonseling ID',
            'namakonseling' => 'Namakonseling',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPelanggarans()
    {
        return $this->hasMany(\app\models\Pelanggaran::className(), ['jeniskonseling_id' => 'jeniskonseling_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\JeniskonselingQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\JeniskonselingQuery(get_called_class());
    }
}
