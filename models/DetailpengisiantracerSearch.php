<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Detailpengisiantracer;

/**
 * app\models\DetailpengisiantracerSearch represents the model behind the search form about `app\models\Detailpengisiantracer`.
 */
 class DetailpengisiantracerSearch extends Detailpengisiantracer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['detailpengisiantracer_id', 'pengisiantracer_id', 'periodetracer_id', 'pertanyaan_id', 'jawaban_id'], 'integer'],
            [['jawabanesai'], 'safe'],
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
        $query = Detailpengisiantracer::find();

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
            'detailpengisiantracer_id' => $this->detailpengisiantracer_id,
            'pengisiantracer_id' => $this->pengisiantracer_id,
            'periodetracer_id' => $this->periodetracer_id,
            'pertanyaan_id' => $this->pertanyaan_id,
            'jawaban_id' => $this->jawaban_id,
        ]);

        $query->andFilterWhere(['like', 'jawabanesai', $this->jawabanesai]);

        return $dataProvider;
    }
}
