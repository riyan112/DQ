<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Izinekskul;

/**
 * app\models\IzinekskulSearch represents the model behind the search form about `app\models\Izinekskul`.
 */
 class IzinekskulSearch extends Izinekskul
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['izinekskul_id', 'siswa_id'], 'integer'],
            [['keteranganizinekskul', 'tgl_izinekskul', 'buktiizinekskul'], 'safe'],
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
        $query = Izinekskul::find();

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
            'izinekskul_id' => $this->izinekskul_id,
            'siswa_id' => $this->siswa_id,
            'tgl_izinekskul' => $this->tgl_izinekskul,
        ]);

        $query->andFilterWhere(['like', 'keteranganizinekskul', $this->keteranganizinekskul])
            ->andFilterWhere(['like', 'buktiizinekskul', $this->buktiizinekskul]);

        return $dataProvider;
    }
}
