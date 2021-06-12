<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Hasilkaryasiswa;

/**
 * app\models\HasilkaryasiswaSearch represents the model behind the search form about `app\models\Hasilkaryasiswa`.
 */
 class HasilkaryasiswaSearch extends Hasilkaryasiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hasilkaryasiswa_id', 'siswa_id', 'jeniskaryasiswa_id'], 'integer'],
            [['judulkaryasiswa', 'keterangankaryasiswa', 'tgluploadkaryasiswa', 'portofolio'], 'safe'],
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
        $query = Hasilkaryasiswa::find();

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
            'hasilkaryasiswa_id' => $this->hasilkaryasiswa_id,
            'siswa_id' => $this->siswa_id,
            'jeniskaryasiswa_id' => $this->jeniskaryasiswa_id,
            'tgluploadkaryasiswa' => $this->tgluploadkaryasiswa,
        ]);

        $query->andFilterWhere(['like', 'judulkaryasiswa', $this->judulkaryasiswa])
            ->andFilterWhere(['like', 'keterangankaryasiswa', $this->keterangankaryasiswa])
            ->andFilterWhere(['like', 'portofolio', $this->portofolio]);

        return $dataProvider;
    }
}
