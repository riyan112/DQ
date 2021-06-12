<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ekskul;

/**
 * app\models\EkskulSearch represents the model behind the search form about `app\models\Ekskul`.
 */
 class EkskulSearch extends Ekskul
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ekskul_id', 'siswa_id', 'jenisekskul_id'], 'integer'],
            [['nilai', 'keterangan'], 'safe'],
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
        $query = Ekskul::find();

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
            'ekskul_id' => $this->ekskul_id,
            'siswa_id' => $this->siswa_id,
            'jenisekskul_id' => $this->jenisekskul_id,
        ]);

        $query->andFilterWhere(['like', 'nilai', $this->nilai])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
