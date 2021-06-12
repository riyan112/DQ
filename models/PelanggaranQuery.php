<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Pelanggaran]].
 *
 * @see Pelanggaran
 */
class PelanggaranQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Pelanggaran[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Pelanggaran|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
