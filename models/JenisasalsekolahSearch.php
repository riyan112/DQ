<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Jenisasalsekolah;

/**
 * app\models\JenisasalsekolahSearch represents the model behind the search form about `app\models\Jenisasalsekolah`.
 */
 class JenisasalsekolahSearch extends Jenisasalsekolah
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jenisasalsekolah_id'], 'integer'],
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
        $query = Jenisasalsekolah::find();

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
            'jenisasalsekolah_id' => $this->jenisasalsekolah_id,
        ]);

        $query->andFilterWhere(['like', 'namaasalsekolah', $this->namaasalsekolah]);

        return $dataProvider;
    }
}
