<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pengisiantracer;

/**
 * app\models\PengisiantracerSearch represents the model behind the search form about `app\models\Pengisiantracer`.
 */
 class PengisiantracerSearch extends Pengisiantracer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pengisiantracer_id', 'alumni_id'], 'integer'],
            [['saran', 'keterangan'], 'safe'],
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
        $query = Pengisiantracer::find();

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
            'pengisiantracer_id' => $this->pengisiantracer_id,
            'alumni_id' => $this->alumni_id,
        ]);

        $query->andFilterWhere(['like', 'saran', $this->saran])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
