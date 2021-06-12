<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Citacita]].
 *
 * @see Citacita
 */
class CitacitaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Citacita[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Citacita|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
