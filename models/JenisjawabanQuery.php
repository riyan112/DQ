<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Jenisjawaban]].
 *
 * @see Jenisjawaban
 */
class JenisjawabanQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Jenisjawaban[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Jenisjawaban|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
