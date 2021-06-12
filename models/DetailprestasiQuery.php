<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Detailprestasi]].
 *
 * @see Detailprestasi
 */
class DetailprestasiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Detailprestasi[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Detailprestasi|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
