<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Jaraklokasisiswa]].
 *
 * @see Jaraklokasisiswa
 */
class JaraklokasisiswaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Jaraklokasisiswa[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Jaraklokasisiswa|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
