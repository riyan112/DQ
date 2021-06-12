<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "detailprestasi".
 *
 * @property integer $detailprestasi_id
 * @property integer $siswa_id
 * @property integer $bidangprestasi_id
 * @property integer $tingkatprestasi_id
 * @property integer $peringkat_id
 * @property string $tahunmeraihprestasi
 *
 * @property \app\models\Bidangprestasi $bidangprestasi
 * @property \app\models\Tingkatprestasi $tingkatprestasi
 * @property \app\models\Peringkat $peringkat
 * @property \app\models\Siswa $siswa
 * @property \app\models\Siswa[] $siswas
 */
class Detailprestasi extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'bidangprestasi',
            'tingkatprestasi',
            'peringkat',
            'siswa',
            'siswas'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['siswa_id', 'bidangprestasi_id', 'tingkatprestasi_id', 'peringkat_id'], 'integer'],
            [['tahunmeraihprestasi'], 'string', 'max' => 5]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detailprestasi';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'detailprestasi_id' => 'Detailprestasi ID',
            'siswa_id' => 'Siswa ID',
            'bidangprestasi_id' => 'Bidangprestasi ID',
            'tingkatprestasi_id' => 'Tingkatprestasi ID',
            'peringkat_id' => 'Peringkat ID',
            'tahunmeraihprestasi' => 'Tahunmeraihprestasi',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBidangprestasi()
    {
        return $this->hasOne(\app\models\Bidangprestasi::className(), ['bidangprestasi_id' => 'bidangprestasi_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTingkatprestasi()
    {
        return $this->hasOne(\app\models\Tingkatprestasi::className(), ['tingkatprestasi_id' => 'tingkatprestasi_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeringkat()
    {
        return $this->hasOne(\app\models\Peringkat::className(), ['peringkat_id' => 'peringkat_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiswa()
    {
        return $this->hasOne(\app\models\Siswa::className(), ['siswa_id' => 'siswa_id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiswas()
    {
        return $this->hasMany(\app\models\Siswa::className(), ['detailprestasi_id' => 'detailprestasi_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\DetailprestasiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\DetailprestasiQuery(get_called_class());
    }
}
