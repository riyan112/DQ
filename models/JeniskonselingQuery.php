<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Jeniskonseling]].
 *
 * @see Jeniskonseling
 */
class JeniskonselingQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Jeniskonseling[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Jeniskonseling|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
