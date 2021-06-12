<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Peringkat]].
 *
 * @see Peringkat
 */
class PeringkatQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Peringkat[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Peringkat|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
