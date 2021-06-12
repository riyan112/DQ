<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Jadwalekskul;

/**
 * app\models\JadwalekskulSearch represents the model behind the search form about `app\models\Jadwalekskul`.
 */
 class JadwalekskulSearch extends Jadwalekskul
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jadwalekskul_id', 'jadwal_masukekskul', 'jadwal_pulangekskul', 'batas_awal_masukekskul', 'batas_akhir_masukekskul', 'batas_awal_pulangekskul', 'batas_akhir_pulangekskul', 'isaktif'], 'safe'],
            [['ekskul_id'], 'integer'],
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
        $query = Jadwalekskul::find();

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
            'ekskul_id' => $this->ekskul_id,
            'jadwal_masukekskul' => $this->jadwal_masukekskul,
            'jadwal_pulangekskul' => $this->jadwal_pulangekskul,
            'batas_awal_masukekskul' => $this->batas_awal_masukekskul,
            'batas_akhir_masukekskul' => $this->batas_akhir_masukekskul,
            'batas_awal_pulangekskul' => $this->batas_awal_pulangekskul,
            'batas_akhir_pulangekskul' => $this->batas_akhir_pulangekskul,
        ]);

        $query->andFilterWhere(['like', 'jadwalekskul_id', $this->jadwalekskul_id])
            ->andFilterWhere(['like', 'isaktif', $this->isaktif]);

        return $dataProvider;
    }
}
