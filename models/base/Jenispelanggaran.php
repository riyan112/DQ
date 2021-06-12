<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "jenispelanggaran".
 *
 * @property integer $jenispelanggaran_id
 * @property string $namapelanggran
 *
 * @property \app\models\Pelanggaran[] $pelanggarans
 */
class Jenispelanggaran extends \yii\db\ActiveRecord
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
            [['namapelanggran'], 'required'],
            [['namapelanggran'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jenispelanggaran';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jenispelanggaran_id' => 'Jenispelanggaran ID',
            'namapelanggran' => 'Namapelanggran',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPelanggarans()
    {
        return $this->hasMany(\app\models\Pelanggaran::className(), ['jenispelanggaran_id' => 'jenispelanggaran_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\JenispelanggaranQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\JenispelanggaranQuery(get_called_class());
    }
}
