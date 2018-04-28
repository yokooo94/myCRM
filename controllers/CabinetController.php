<?php

/**
 * Контроллер CabinetController
 */
class CabinetController
{

    /**
     * Action для личного кабинета
     */
    public function actionIndex()
    {
        //Текущий пользовать
        $user = User::getCurrentUser();

        $smarty = SmartyHelper::create();
        $pathMenu = ROOT . '/views/cabinet/includes/menu.tpl';
        $smarty->assign('pathMenu', $pathMenu);
        $smarty->assign('user', $user);

        // Подключаем вид
        $smarty->display(ROOT . '/views/cabinet/index.tpl');

        return true;
    }

    /**
     * Action для входа в личный кабинет
     */
    public function actionSignIn()
    {

        if (!empty($_POST)) {
            //Делаем соединение с базой данных
            Database::connect();

            $user = R::findOne(Constants::TABLE_USER, ' email = ? ', [$_POST["email"]]);

            if ($user) {

                if (password_verify($_POST['password'], $user['password'])) {
                    // Добавление информации о пользователе в сессию
                    User::auth($user);

                    // Перенаправляем пользователя в личный кабинет
                    header("Location: /cabinet");
                }
            }
        }

        $smarty = SmartyHelper::create();

        // Подключаем вид
        $smarty->display(ROOT . '/views/cabinet/signIn.tpl');

        return true;
    }

    /**
     * Action для регистрации в личный кабинет
     */
    public function actionSignUp()
    {

        if (!empty($_POST)) {
            //Делаем соединение с базой данных
            Database::connect();

            //Добавление нового пользователя
            $user = R::dispense(Constants::TABLE_USER);
            $user->email = $_POST["email"];
            $user->password = password_hash($_POST["password"], PASSWORD_DEFAULT);

            $company = R::dispense(Constants::TABLE_COMPANY);
            $company->name = $_POST['companyName'];
            $user->company = $company;
            $user->token = User::generateToken();

            //Сохраняем пользователя
            R::store($user);

            // Добавление информации о пользователе в сессию
            User::auth($user);

            // Перенаправляем пользователя в личный кабинет
            header("Location: /cabinet");
        }

        $smarty = SmartyHelper::create();

        // Подключаем вид
        $smarty->display(ROOT . '/views/cabinet/signUp.tpl');

        return true;
    }

    /**
     * Action для выхода из личного кабинета
     */
    public function actionLogOut()
    {

        // Удаляем информацию о пользователе из сессии
        unset($_SESSION['userId']);
        unset($_SESSION['token']);

        // Перенаправляем пользователя на вход в личный кабинет
        header("Location: /cabinet/signIn");

        return true;
    }
}
