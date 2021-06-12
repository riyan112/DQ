<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Alattransportasi;

/**
 * app\models\AlattransportasiSearch represents the model behind the search form about `app\models\Alattransportasi`.
 */
 class AlattransportasiSearch extends Alattransportasi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alattransportasi_id'], 'integer'],
            [['namaalattransportasi'], 'safe'],
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
        $query = Alattransportasi::find();

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
            'alattransportasi_id' => $this->alattransportasi_id,
        ]);

        $query->andFilterWhere(['like', 'namaalattransportasi', $this->namaalattransportasi]);

        return $dataProvider;
    }
}
