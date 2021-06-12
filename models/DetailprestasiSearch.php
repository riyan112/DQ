<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Detailprestasi;

/**
 * app\models\DetailprestasiSearch represents the model behind the search form about `app\models\Detailprestasi`.
 */
 class DetailprestasiSearch extends Detailprestasi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['detailprestasi_id', 'siswa_id', 'bidangprestasi_id', 'tingkatprestasi_id', 'peringkat_id'], 'integer'],
            [['tahunmeraihprestasi'], 'safe'],
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
        $query = Detailprestasi::find();

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
            'detailprestasi_id' => $this->detailprestasi_id,
            'siswa_id' => $this->siswa_id,
            'bidangprestasi_id' => $this->bidangprestasi_id,
            'tingkatprestasi_id' => $this->tingkatprestasi_id,
            'peringkat_id' => $this->peringkat_id,
        ]);

        $query->andFilterWhere(['like', 'tahunmeraihprestasi', $this->tahunmeraihprestasi]);

        return $dataProvider;
    }
}
