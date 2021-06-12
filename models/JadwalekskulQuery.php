<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Jadwalekskul]].
 *
 * @see Jadwalekskul
 */
class JadwalekskulQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Jadwalekskul[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Jadwalekskul|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
