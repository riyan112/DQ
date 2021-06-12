<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "mutasi".
 *
 * @property integer $mutasi_id
 * @property integer $siswa_id
 * @property string $tgl_mutasi
 * @property string $keteranganmutasi
 * @property integer $isapproval
 * @property string $tgl_approval
 *
 * @property \app\models\Siswa $siswa
 */
class Mutasi extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'siswa'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['siswa_id', 'keteranganmutasi', 'isapproval'], 'required'],
            [['siswa_id', 'isapproval'], 'integer'],
            [['tgl_mutasi', 'tgl_approval'], 'safe'],
            [['keteranganmutasi'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mutasi';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mutasi_id' => 'Mutasi ID',
            'siswa_id' => 'Siswa ID',
            'tgl_mutasi' => 'Tgl Mutasi',
            'keteranganmutasi' => 'Keteranganmutasi',
            'isapproval' => 'Isapproval',
            'tgl_approval' => 'Tgl Approval',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiswa()
    {
        return $this->hasOne(\app\models\Siswa::className(), ['siswa_id' => 'siswa_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\MutasiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\MutasiQuery(get_called_class());
    }
}
