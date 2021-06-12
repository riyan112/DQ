<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Pekerjaan]].
 *
 * @see Pekerjaan
 */
class PekerjaanQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Pekerjaan[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Pekerjaan|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
