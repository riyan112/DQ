<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Tingkatprestasi]].
 *
 * @see Tingkatprestasi
 */
class TingkatprestasiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Tingkatprestasi[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Tingkatprestasi|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
