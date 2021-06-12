<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Penghasilanortu]].
 *
 * @see Penghasilanortu
 */
class PenghasilanortuQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Penghasilanortu[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Penghasilanortu|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
