<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Jawabantracer;

/**
 * app\models\JawabantracerSearch represents the model behind the search form about `app\models\Jawabantracer`.
 */
 class JawabantracerSearch extends Jawabantracer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jawaban_id', 'pertanyaan_id', 'jenisjawaban_id'], 'integer'],
            [['isijawaban'], 'safe'],
            [['nourut', 'bobot'], 'number'],
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
        $query = Jawabantracer::find();

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
            'jawaban_id' => $this->jawaban_id,
            'pertanyaan_id' => $this->pertanyaan_id,
            'jenisjawaban_id' => $this->jenisjawaban_id,
            'nourut' => $this->nourut,
            'bobot' => $this->bobot,
        ]);

        $query->andFilterWhere(['like', 'isijawaban', $this->isijawaban]);

        return $dataProvider;
    }
}
