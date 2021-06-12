<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Statussiswa;

/**
 * app\models\StatussiswaSearch represents the model behind the search form about `app\models\Statussiswa`.
 */
 class StatussiswaSearch extends Statussiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['statussiswa_id'], 'integer'],
            [['namastatussiswa'], 'safe'],
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
        $query = Statussiswa::find();

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
            'statussiswa_id' => $this->statussiswa_id,
        ]);

        $query->andFilterWhere(['like', 'namastatussiswa', $this->namastatussiswa]);

        return $dataProvider;
    }
}
