<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Mutasi]].
 *
 * @see Mutasi
 */
class MutasiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Mutasi[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Mutasi|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
