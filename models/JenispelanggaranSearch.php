<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Jenispelanggaran;

/**
 * app\models\JenispelanggaranSearch represents the model behind the search form about `app\models\Jenispelanggaran`.
 */
 class JenispelanggaranSearch extends Jenispelanggaran
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jenispelanggaran_id'], 'integer'],
            [['namapelanggran'], 'safe'],
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
        $query = Jenispelanggaran::find();

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
            'jenispelanggaran_id' => $this->jenispelanggaran_id,
        ]);

        $query->andFilterWhere(['like', 'namapelanggran', $this->namapelanggran]);

        return $dataProvider;
    }
}
