<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pekerjaan;

/**
 * app\models\PekerjaanSearch represents the model behind the search form about `app\models\Pekerjaan`.
 */
 class PekerjaanSearch extends Pekerjaan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pekerjaan_id'], 'integer'],
            [['namapekerjaan'], 'safe'],
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
        $query = Pekerjaan::find();

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
            'pekerjaan_id' => $this->pekerjaan_id,
        ]);

        $query->andFilterWhere(['like', 'namapekerjaan', $this->namapekerjaan]);

        return $dataProvider;
    }
}
