<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Hasilkaryasiswa]].
 *
 * @see Hasilkaryasiswa
 */
class HasilkaryasiswaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Hasilkaryasiswa[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Hasilkaryasiswa|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
