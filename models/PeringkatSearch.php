<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Peringkat;

/**
 * app\models\PeringkatSearch represents the model behind the search form about `app\models\Peringkat`.
 */
 class PeringkatSearch extends Peringkat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['peringkat_id'], 'integer'],
            [['keteranganperingkat'], 'safe'],
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
        $query = Peringkat::find();

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
            'peringkat_id' => $this->peringkat_id,
        ]);

        $query->andFilterWhere(['like', 'keteranganperingkat', $this->keteranganperingkat]);

        return $dataProvider;
    }
}
