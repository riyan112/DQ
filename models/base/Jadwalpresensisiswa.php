<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "jadwalpresensisiswa".
 *
 * @property string $jadwalpresensisiswa_id
 * @property string $jadwal_masuk
 * @property string $jadwal_pulang
 * @property string $batas_awal_masuk
 * @property string $batas_akhir_masuk
 * @property string $batas_awal_pulang
 * @property string $batas_akhir_pulang
 * @property integer $isaktif
 *
 * @property \app\models\Presensisiswa[] $presensisiswas
 */
class Jadwalpresensisiswa extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'presensisiswas'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jadwalpresensisiswa_id', 'jadwal_masuk', 'jadwal_pulang', 'batas_awal_masuk', 'batas_akhir_masuk', 'batas_awal_pulang', 'batas_akhir_pulang', 'isaktif'], 'required'],
            [['jadwal_masuk', 'jadwal_pulang', 'batas_awal_masuk', 'batas_akhir_masuk', 'batas_awal_pulang', 'batas_akhir_pulang'], 'safe'],
            [['jadwalpresensisiswa_id'], 'string', 'max' => 20],
            [['isaktif'], 'string', 'max' => 4]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jadwalpresensisiswa';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jadwalpresensisiswa_id' => 'Jadwalpresensisiswa ID',
            'jadwal_masuk' => 'Jadwal Masuk',
            'jadwal_pulang' => 'Jadwal Pulang',
            'batas_awal_masuk' => 'Batas Awal Masuk',
            'batas_akhir_masuk' => 'Batas Akhir Masuk',
            'batas_awal_pulang' => 'Batas Awal Pulang',
            'batas_akhir_pulang' => 'Batas Akhir Pulang',
            'isaktif' => 'Isaktif',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPresensisiswas()
    {
        return $this->hasMany(\app\models\Presensisiswa::className(), ['jadwalpresensisiswa_id' => 'jadwalpresensisiswa_id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\JadwalpresensisiswaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\JadwalpresensisiswaQuery(get_called_class());
    }
}
