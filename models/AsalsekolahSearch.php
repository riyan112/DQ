<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Asalsekolah;

/**
 * app\models\AsalsekolahSearch represents the model behind the search form about `app\models\Asalsekolah`.
 */
 class AsalsekolahSearch extends Asalsekolah
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['asalsekolah_id'], 'integer'],
            [['namaasalsekolah'], 'safe'],
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
        $query = Asalsekolah::find();

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
            'asalsekolah_id' => $this->asalsekolah_id,
        ]);

        $query->andFilterWhere(['like', 'namaasalsekolah', $this->namaasalsekolah]);

        return $dataProvider;
    }
}
