<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Jenisjawaban;

/**
 * app\models\JenisjawabanSearch represents the model behind the search form about `app\models\Jenisjawaban`.
 */
 class JenisjawabanSearch extends Jenisjawaban
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jenisjawaban_id'], 'integer'],
            [['keteranganjawaban'], 'safe'],
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
        $query = Jenisjawaban::find();

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
            'jenisjawaban_id' => $this->jenisjawaban_id,
        ]);

        $query->andFilterWhere(['like', 'keteranganjawaban', $this->keteranganjawaban]);

        return $dataProvider;
    }
}
