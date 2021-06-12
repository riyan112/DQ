<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Ekskul]].
 *
 * @see Ekskul
 */
class EkskulQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Ekskul[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Ekskul|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
