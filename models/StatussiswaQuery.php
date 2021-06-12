<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Statussiswa]].
 *
 * @see Statussiswa
 */
class StatussiswaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Statussiswa[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Statussiswa|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
