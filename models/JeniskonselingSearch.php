<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Jeniskonseling;

/**
 * app\models\JeniskonselingSearch represents the model behind the search form about `app\models\Jeniskonseling`.
 */
 class JeniskonselingSearch extends Jeniskonseling
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jeniskonseling_id'], 'integer'],
            [['namakonseling'], 'safe'],
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
        $query = Jeniskonseling::find();

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
            'jeniskonseling_id' => $this->jeniskonseling_id,
        ]);

        $query->andFilterWhere(['like', 'namakonseling', $this->namakonseling]);

        return $dataProvider;
    }
}
