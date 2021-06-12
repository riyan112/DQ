<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Filezip;

/**
 * app\models\FilezipSearch represents the model behind the search form about `app\models\Filezip`.
 */
 class FilezipSearch extends Filezip
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['filezip_id', 'ukuran'], 'integer'],
            [['namafilezip', 'tgl_upload'], 'safe'],
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
        $query = Filezip::find();

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
            'filezip_id' => $this->filezip_id,
            'ukuran' => $this->ukuran,
            'tgl_upload' => $this->tgl_upload,
        ]);

        $query->andFilterWhere(['like', 'namafilezip', $this->namafilezip]);

        return $dataProvider;
    }
}
