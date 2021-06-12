<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Periodetracer;

/**
 * app\models\PeriodetracerSearch represents the model behind the search form about `app\models\Periodetracer`.
 */
 class PeriodetracerSearch extends Periodetracer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['periodetracer_id', 'jenistracer_id'], 'integer'],
            [['keteranganperiodetracer', 'tahun', 'isaktifperiode'], 'safe'],
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
        $query = Periodetracer::find();

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
            'periodetracer_id' => $this->periodetracer_id,
            'jenistracer_id' => $this->jenistracer_id,
        ]);

        $query->andFilterWhere(['like', 'keteranganperiodetracer', $this->keteranganperiodetracer])
            ->andFilterWhere(['like', 'tahun', $this->tahun])
            ->andFilterWhere(['like', 'isaktifperiode', $this->isaktifperiode]);

        return $dataProvider;
    }
}
