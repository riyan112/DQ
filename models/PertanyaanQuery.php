<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Pertanyaan]].
 *
 * @see Pertanyaan
 */
class PertanyaanQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Pertanyaan[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Pertanyaan|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
