<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Detailbeasiswa]].
 *
 * @see Detailbeasiswa
 */
class DetailbeasiswaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Detailbeasiswa[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Detailbeasiswa|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
