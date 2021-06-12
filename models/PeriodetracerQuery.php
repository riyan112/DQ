<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Periodetracer]].
 *
 * @see Periodetracer
 */
class PeriodetracerQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Periodetracer[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Periodetracer|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
