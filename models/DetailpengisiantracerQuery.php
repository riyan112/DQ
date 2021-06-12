<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Detailpengisiantracer]].
 *
 * @see Detailpengisiantracer
 */
class DetailpengisiantracerQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Detailpengisiantracer[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Detailpengisiantracer|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
