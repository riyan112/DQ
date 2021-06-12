<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Pengisiantracer]].
 *
 * @see Pengisiantracer
 */
class PengisiantracerQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Pengisiantracer[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Pengisiantracer|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
