<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Kelas;

/**
 * app\models\KelasSearch represents the model behind the search form about `app\models\Kelas`.
 */
 class KelasSearch extends Kelas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kelas_id'], 'integer'],
            [['namakelas'], 'safe'],
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
        $query = Kelas::find();

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
            'kelas_id' => $this->kelas_id,
        ]);

        $query->andFilterWhere(['like', 'namakelas', $this->namakelas]);

        return $dataProvider;
    }
}
