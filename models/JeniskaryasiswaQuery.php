<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Jeniskaryasiswa]].
 *
 * @see Jeniskaryasiswa
 */
class JeniskaryasiswaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Jeniskaryasiswa[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Jeniskaryasiswa|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
