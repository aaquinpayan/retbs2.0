<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

<<<<<<< HEAD
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
=======
class User extends \yii\base\Object implements \yii\web\IdentityInterface
>>>>>>> origin/db_branch
{
    
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'username', 'password', 'user_type'], 'required'],
            [['name'], 'string'],
            [['user_type'], 'integer'],
            [['username', 'password'], 'string', 'max' => 20],
        ];
    }

<<<<<<< HEAD
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'user_id' => 'User ID',
            'username' => 'Username',
            'password' => 'Password',
            'user_type' => 'User Type',
        ];
=======
    /*private static $users = [
        '100' => [
            'id' => '100',
            'username' => 'admin',
            'password' => 'admin',
            'authKey' => 'test100key',
            'accessToken' => '100-token',
        ],
        '101' => [
            'id' => '101',
            'username' => 'demo',
            'password' => 'demo',
            'authKey' => 'test101key',
            'accessToken' => '101-token',
        ],
    ];*/
    public static function tableName()
    {
        return 'user';
>>>>>>> origin/db_branch
    }


    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return $this->access_token;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
<<<<<<< HEAD
        return static::find()->where(['username' => $username])->one();
=======
        return self::findOne(['username' => $username]);
>>>>>>> origin/db_branch
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->user_id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
