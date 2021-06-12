<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Kelasparalel;

/**
 * app\models\KelasparalelSearch represents the model behind the search form about `app\models\Kelasparalel`.
 */
 class KelasparalelSearch extends Kelasparalel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kelasparalel_id'], 'integer'],
            [['namakelasparalel', 'keterangan'], 'safe'],
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
        $query = Kelasparalel::find();

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
            'kelasparalel_id' => $this->kelasparalel_id,
        ]);

        $query->andFilterWhere(['like', 'namakelasparalel', $this->namakelasparalel])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
