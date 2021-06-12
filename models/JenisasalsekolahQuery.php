<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Jenisasalsekolah]].
 *
 * @see Jenisasalsekolah
 */
class JenisasalsekolahQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Jenisasalsekolah[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Jenisasalsekolah|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
