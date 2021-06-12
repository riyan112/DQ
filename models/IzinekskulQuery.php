<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Izinekskul]].
 *
 * @see Izinekskul
 */
class IzinekskulQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Izinekskul[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Izinekskul|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
