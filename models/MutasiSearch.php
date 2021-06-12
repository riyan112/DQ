<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mutasi;

/**
 * app\models\MutasiSearch represents the model behind the search form about `app\models\Mutasi`.
 */
 class MutasiSearch extends Mutasi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mutasi_id', 'siswa_id', 'isapproval'], 'integer'],
            [['tgl_mutasi', 'keteranganmutasi', 'tgl_approval'], 'safe'],
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
        $query = Mutasi::find();

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
            'mutasi_id' => $this->mutasi_id,
            'siswa_id' => $this->siswa_id,
            'tgl_mutasi' => $this->tgl_mutasi,
            'isapproval' => $this->isapproval,
            'tgl_approval' => $this->tgl_approval,
        ]);

        $query->andFilterWhere(['like', 'keteranganmutasi', $this->keteranganmutasi]);

        return $dataProvider;
    }
}
