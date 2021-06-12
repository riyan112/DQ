<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Jenistracer;

/**
 * app\models\JenistracerSearch represents the model behind the search form about `app\models\Jenistracer`.
 */
 class JenistracerSearch extends Jenistracer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jenistracer_id'], 'integer'],
            [['namajenistracer'], 'safe'],
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
        $query = Jenistracer::find();

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
            'jenistracer_id' => $this->jenistracer_id,
        ]);

        $query->andFilterWhere(['like', 'namajenistracer', $this->namajenistracer]);

        return $dataProvider;
    }
}
