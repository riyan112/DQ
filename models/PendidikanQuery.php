<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Pendidikan]].
 *
 * @see Pendidikan
 */
class PendidikanQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Pendidikan[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Pendidikan|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
