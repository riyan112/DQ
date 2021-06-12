<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Izinsiswa]].
 *
 * @see Izinsiswa
 */
class IzinsiswaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Izinsiswa[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Izinsiswa|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
