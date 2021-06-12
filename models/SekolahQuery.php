<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Sekolah]].
 *
 * @see Sekolah
 */
class SekolahQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Sekolah[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Sekolah|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
