<?php

namespace app\models;

use Yii;
use \app\models\base\User as BaseUser;

/**
 * This is the model class for table "user".
 */
class User extends BaseUser
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['username', 'auth_key', 'password_hash', 'created_at', 'updated_at'], 'required'],
            [['status', 'superadmin', 'created_at', 'updated_at', 'email_confirmed'], 'integer'],
            [['username', 'password_hash', 'confirmation_token', 'bind_to_ip'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['registration_ip'], 'string', 'max' => 15],
            [['email'], 'string', 'max' => 128]
        ]);
    }
	
}
