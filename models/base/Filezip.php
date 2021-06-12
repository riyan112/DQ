<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "filezip".
 *
 * @property integer $filezip_id
 * @property string $namafilezip
 * @property integer $ukuran
 * @property string $tgl_upload
 */
class Filezip extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            ''
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['namafilezip', 'ukuran'], 'required'],
            [['ukuran'], 'integer'],
            [['tgl_upload'], 'safe'],
            [['filezip_id'], 'unique'],
            [['namafilezip'], 'file', 'extensions' => 'zip', 'skipOnEmpty' => false,  'on' => 'create'],
            
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'filezip';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'filezip_id' => 'Filezip ID',
            'namafilezip' => 'Namafilezip',
            'ukuran' => 'Ukuran',
            'tgl_upload' => 'Tgl Upload',
        ];
    }


    /**
     * @inheritdoc
     * @return \app\models\FilezipQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\FilezipQuery(get_called_class());
    }
}
