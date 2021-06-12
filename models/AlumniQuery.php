<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Alumni]].
 *
 * @see Alumni
 */
class AlumniQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Alumni[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Alumni|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
