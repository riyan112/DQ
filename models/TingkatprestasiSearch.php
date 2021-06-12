<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tingkatprestasi;

/**
 * app\models\TingkatprestasiSearch represents the model behind the search form about `app\models\Tingkatprestasi`.
 */
 class TingkatprestasiSearch extends Tingkatprestasi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tingkatprestasi_id'], 'integer'],
            [['keterangantingkatprestasi'], 'safe'],
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
        $query = Tingkatprestasi::find();

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
            'tingkatprestasi_id' => $this->tingkatprestasi_id,
        ]);

        $query->andFilterWhere(['like', 'keterangantingkatprestasi', $this->keterangantingkatprestasi]);

        return $dataProvider;
    }
}
