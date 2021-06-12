<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "detailbeasiswa".
 *
 * @property integer $detailbeasiswa_id
 * @property integer $jenisbeasiswa_id
 * @property integer $sumberbeasiswa_id
 * @property string $jangkawaktu
 * @property string $nominalditerima
 *
 * @property \app\models\Jenisbeasiswa $jenisbeasiswa
 * @property \app\models\Sumberbeasiswa $sumberbeasiswa
 * @property \app\models\Siswa[] $siswas
 */
class Detailbeasiswa extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'jenisbeasiswa',
            'sumberbeasiswa',
            'siswas'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jenisbeasiswa_id', 'sumberbeasiswa_id'], 'integer'],
            [['nominalditerima'], 'number'],
            [['jangkawaktu'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detailbeasiswa';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'detailbeasiswa_id' => 'Detail Beasiswa ID',
            'jenisbeasiswa_id' => 'Nama Beasiswa',
            'sumberbeasiswa_id' => 'Sumber Beasiswa',
            'jangkawaktu' => 'Jangka Waktu',
            'nominalditerima' => 'Nominal diterima',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenisbeasiswa()
    {
        return $this->hasOne(\app\models\Jenisbeasiswa::className(), ['jenisbeasiswa_id' => 'jenisbeasiswa_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSumberbeasiswa()
    {
        return $this->hasOne(\app\models\Sumberbeasiswa::className(), ['sumberbeasiswa_id' => 'sumberbeasiswa_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiswas()
    {
        return $this->hasMany(\app\models\Siswa::className(), ['detailbeasiswa_id' => 'detailbeasiswa_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\DetailbeasiswaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\DetailbeasiswaQuery(get_called_class());
    }
}
