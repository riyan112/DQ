<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Jenisbeasiswa]].
 *
 * @see Jenisbeasiswa
 */
class JenisbeasiswaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Jenisbeasiswa[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Jenisbeasiswa|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
