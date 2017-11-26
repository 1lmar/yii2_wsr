<?php
/**
 * Created by PhpStorm.
 * User: Ильмар
 * Date: 23.11.2017
 * Time: 16:56
 */

namespace app\models;

use yii\base\Model;


class RegForm extends Model
{
    public $name;
    public $email;
    public $username;
    public $password;
    public $image;
    public $checkPassword;

    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'username', 'password','checkPassword'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            ['image', 'image'],
            ['password', 'string', 'min' => '6'],
            ['checkPassword', 'compare', 'compareAttribute' => 'password'],
            ['username', 'unique', 'targetClass' => User::className(),  'message' => 'Этот логин уже занят'],
        ];
    }

    public function attributeLabels() {
        return [
            'name' => 'ФИО',
            'email' => 'Почта',
            'username' => 'Логин',
            'password' => 'Пароль',
            'checkPassword' => 'Подтверждение пароля',
            'image' => 'Аватар',
        ];
    }


}