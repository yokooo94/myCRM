<?php

/**
 * Класс Constants
 * Компонент для констант
 */
class Constants
{
    //AUTH
    const ERROR_AUTH_PASSWORD = 'Неверный пароль';
    const ERROR_AUTH_EMAIL = 'Пользователь с таким email не найден';
    const ERROR_AUTH_DUPLICATE_EMAIL = 'Пользователь с таким email уже зарегистрирован';
    
    //CRUD
    const ERROR_CREATE = 'Возникла ошибка при создании новой записи\Обратитесь к администратору системы';

    //TABLES
    const TABLE_USER = 'user';
    const TABLE_COMPANY = 'company';
    const TABLE_CLIENT = 'client';
}
