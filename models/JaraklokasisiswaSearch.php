<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Jaraklokasisiswa;

/**
 * app\models\JaraklokasisiswaSearch represents the model behind the search form about `app\models\Jaraklokasisiswa`.
 */
 class JaraklokasisiswaSearch extends Jaraklokasisiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jaraklokasisiswa_id'], 'integer'],
            [['namajaraklokasisiswa'], 'safe'],
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
        $query = Jaraklokasisiswa::find();

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
            'jaraklokasisiswa_id' => $this->jaraklokasisiswa_id,
        ]);

        $query->andFilterWhere(['like', 'namajaraklokasisiswa', $this->namajaraklokasisiswa]);

        return $dataProvider;
    }
}
