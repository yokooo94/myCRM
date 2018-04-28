<?php

/**
 * Класс User - модель для работы с пользователями
 */
class User
{
    /**
     * Генерируем уникальный Token
     *
     * @return String
     */
    public static function generateToken()
    {
        return uniqid(rand(), true);
    }

    /**
     * Авторизация пользователя
     *
     * @param String $userId
     * @param String $token
     * @return void
     */
    public static function auth($user)
    {
        // Записываем пользователя в сессию
        $_SESSION['userId'] = $user->id;
        $_SESSION['token'] = $user->token;
    }

    /**
     * Получить данные текущего пользователя
     *
     * @return User
     */
    public static function getCurrentUser()
    {
        $guest = true;
        if (isset($_SESSION['userId'])) {
            //Делаем соединение с базой данных
            Database::connect();

            $user = R::load(Constants::TABLE_USER, $_SESSION['userId']);

            //Проверка токена
            if ($user['token'] == $_SESSION['token']) {
                $guest = false;
                return $user;
            }
        }
        if ($guest) {
            // Удаляем информацию о пользователе из сессии
            unset($_SESSION['userId']);
            unset($_SESSION['token']);

            // Перенаправляем пользователя на вход в личный кабинет
            header("Location: /cabinet/signIn");
        }

    }
}
