<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Jenispertanyaan]].
 *
 * @see Jenispertanyaan
 */
class JenispertanyaanQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Jenispertanyaan[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Jenispertanyaan|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
