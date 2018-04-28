<?php

// Подключение библиотеки RedBeanPHP - https://redbeanphp.com/
require 'libs/RedBeanPHP/rb-mysql.php';

/**
 * Класс Database
 * Компонент для работы с базой данных
 */
class Database
{
    /**
     * Устанавливает соедлинение с базой данных
     *
     * @return void
     */
    public static function connect()
    {
        // Получаем параметры подключения из файла
        $paramsPath = ROOT . '/config/db_params.php';
        $params = include $paramsPath;
        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";

        // Проверяем и устанавливаем соединение
        if (!R::testConnection()) {
            R::setup($dsn, $params['user'], $params['password']);
        }

    }
}
