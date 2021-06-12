<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Filesiswa;

/**
 * app\models\FilesiswaSearch represents the model behind the search form about `app\models\Filesiswa`.
 */
 class FilesiswaSearch extends Filesiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['filesiswa_id', 'ukuran'], 'integer'],
            [['namafilesiswa', 'tgl_upload', 'tgl_proses'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Filesiswa::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'filesiswa_id' => $this->filesiswa_id,
            'ukuran' => $this->ukuran,
            'tgl_upload' => $this->tgl_upload,
            'tgl_proses' => $this->tgl_proses,
        ]);

        $query->andFilterWhere(['like', 'namafilesiswa', $this->namafilesiswa]);

        return $dataProvider;
    }
}
