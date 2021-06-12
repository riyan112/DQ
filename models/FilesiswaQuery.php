<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Filesiswa]].
 *
 * @see Filesiswa
 */
class FilesiswaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Filesiswa[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Filesiswa|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
