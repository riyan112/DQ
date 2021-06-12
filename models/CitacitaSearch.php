<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Citacita;

/**
 * app\models\CitacitaSearch represents the model behind the search form about `app\models\Citacita`.
 */
 class CitacitaSearch extends Citacita
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['citacita_id'], 'integer'],
            [['namacitacita'], 'safe'],
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
        $query = Citacita::find();

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
            'citacita_id' => $this->citacita_id,
        ]);

        $query->andFilterWhere(['like', 'namacitacita', $this->namacitacita]);

        return $dataProvider;
    }
}
