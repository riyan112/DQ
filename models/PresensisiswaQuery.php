<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Presensisiswa]].
 *
 * @see Presensisiswa
 */
class PresensisiswaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Presensisiswa[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Presensisiswa|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
