<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Statusasalsekolah]].
 *
 * @see Statusasalsekolah
 */
class StatusasalsekolahQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Statusasalsekolah[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Statusasalsekolah|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
