<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Jadwalpresensisiswa]].
 *
 * @see Jadwalpresensisiswa
 */
class JadwalpresensisiswaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Jadwalpresensisiswa[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Jadwalpresensisiswa|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
