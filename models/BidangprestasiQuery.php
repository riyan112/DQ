<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Bidangprestasi]].
 *
 * @see Bidangprestasi
 */
class BidangprestasiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Bidangprestasi[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Bidangprestasi|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
