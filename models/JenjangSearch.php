<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Jenjang;

/**
 * app\models\JenjangSearch represents the model behind the search form about `app\models\Jenjang`.
 */
 class JenjangSearch extends Jenjang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jenjang_sekolah_id'], 'integer'],
            [['nama_jenjang'], 'safe'],
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
        $query = Jenjang::find();

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
            'jenjang_sekolah_id' => $this->jenjang_sekolah_id,
        ]);

        $query->andFilterWhere(['like', 'nama_jenjang', $this->nama_jenjang]);

        return $dataProvider;
    }
}
