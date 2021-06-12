<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Jenistracer]].
 *
 * @see Jenistracer
 */
class JenistracerQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Jenistracer[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Jenistracer|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
