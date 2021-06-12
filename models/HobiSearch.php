<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Hobi;

/**
 * app\models\HobiSearch represents the model behind the search form about `app\models\Hobi`.
 */
 class HobiSearch extends Hobi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hobi_id'], 'integer'],
            [['namahobi'], 'safe'],
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
        $query = Hobi::find();

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
            'hobi_id' => $this->hobi_id,
        ]);

        $query->andFilterWhere(['like', 'namahobi', $this->namahobi]);

        return $dataProvider;
    }
}
