<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Sumberbeasiswa]].
 *
 * @see Sumberbeasiswa
 */
class SumberbeasiswaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Sumberbeasiswa[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Sumberbeasiswa|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
