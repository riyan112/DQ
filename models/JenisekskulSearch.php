<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Jenisekskul;

/**
 * app\models\JenisekskulSearch represents the model behind the search form about `app\models\Jenisekskul`.
 */
 class JenisekskulSearch extends Jenisekskul
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jenisekskul_id'], 'integer'],
            [['namaekskul'], 'safe'],
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
        $query = Jenisekskul::find();

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
            'jenisekskul_id' => $this->jenisekskul_id,
        ]);

        $query->andFilterWhere(['like', 'namaekskul', $this->namaekskul]);

        return $dataProvider;
    }
}
