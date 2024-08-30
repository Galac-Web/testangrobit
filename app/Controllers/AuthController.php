<?php
require_once './app/Models/AdvancedCRUD.php';
require_once './app/Models/User.php';

class AuthController
{
    public function index($login, $password)
    {
        // Вызов статического метода, который проверяет логин и пароль
        $user = static::getLoginData($login, $password);

        // Проверка, найден ли пользователь
        if ($user) {
            return $user; // Возвращаем данные пользователя
        } else {
            return 'Неверный логин или пароль'; // Сообщение об ошибке
        }
    }


    protected static function getIdDatte($id)
    {
        // Проверка пользователя по логину и паролю
        return User::getLoginID($id);
    }



    protected static function getLoginData($login, $password)
    {
        // Проверка пользователя по логину и паролю
        return User::getLogin($login, $password);
    }
}
