<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Filezip]].
 *
 * @see Filezip
 */
class FilezipQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Filezip[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Filezip|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
