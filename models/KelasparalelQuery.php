<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Kelasparalel]].
 *
 * @see Kelasparalel
 */
class KelasparalelQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Kelasparalel[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Kelasparalel|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
