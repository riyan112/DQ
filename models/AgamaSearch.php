<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Agama;

/**
 * app\models\AgamaSearch represents the model behind the search form about `app\models\Agama`.
 */
 class AgamaSearch extends Agama
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['agama_id'], 'integer'],
            [['namaagama'], 'safe'],
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
        $query = Agama::find();

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
            'agama_id' => $this->agama_id,
        ]);

        $query->andFilterWhere(['like', 'namaagama', $this->namaagama]);

        return $dataProvider;
    }
}
