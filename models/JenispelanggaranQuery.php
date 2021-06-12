<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Jenispelanggaran]].
 *
 * @see Jenispelanggaran
 */
class JenispelanggaranQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Jenispelanggaran[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Jenispelanggaran|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
