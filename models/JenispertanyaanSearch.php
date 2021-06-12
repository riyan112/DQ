<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Jenispertanyaan;

/**
 * app\models\JenispertanyaanSearch represents the model behind the search form about `app\models\Jenispertanyaan`.
 */
 class JenispertanyaanSearch extends Jenispertanyaan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jenispertanyaan_id'], 'integer'],
            [['keteranganpertanyaan'], 'safe'],
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
        $query = Jenispertanyaan::find();

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
            'jenispertanyaan_id' => $this->jenispertanyaan_id,
        ]);

        $query->andFilterWhere(['like', 'keteranganpertanyaan', $this->keteranganpertanyaan]);

        return $dataProvider;
    }
}
