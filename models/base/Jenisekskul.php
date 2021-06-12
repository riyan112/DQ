<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "jenisekskul".
 *
 * @property integer $jenisekskul_id
 * @property string $namaekskul
 *
 * @property \app\models\Ekskul[] $ekskuls
 */
class Jenisekskul extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'ekskuls'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['namaekskul'], 'required'],
            [['namaekskul'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jenisekskul';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jenisekskul_id' => 'Jenisekskul ID',
            'namaekskul' => 'Namaekskul',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEkskuls()
    {
        return $this->hasMany(\app\models\Ekskul::className(), ['jenisekskul_id' => 'jenisekskul_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\JenisekskulQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\JenisekskulQuery(get_called_class());
    }
}
