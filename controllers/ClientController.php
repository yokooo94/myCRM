<?php

/**
 * Контроллер ClientController
 */
class ClientController
{

    /**
     * Action для клиентов компании
     */
    public function actionIndex()
    {
        //Текущий пользовать
        $user = User::getCurrentUser();

        if (!empty($_POST)) {
            //Делаем соединение с базой данных
            Database::connect();

            //Добавление нового клиента
            $client = R::dispense(Constants::TABLE_CLIENT);
            $client->company = $user->company;
            $client->user = $user;
            $client->name = $_POST["name"];
            $client->phone = $_POST["phone"];
            $client->car = $_POST["car"];
            $client->carNumber = $_POST["carNumber"];

            //Сохраняем клиента
            R::store($client);

            //Обновление контента
            header('Location: ' . $_SERVER['REQUEST_URI']);
        }

        $smarty = SmartyHelper::create();
        $pathMenu = ROOT . '/views/cabinet/includes/menu.tpl';
        $pathAddClient = ROOT . '/views/client/includes/addClient.tpl';
        $pathListClient = ROOT . '/views/client/includes/listClient.tpl';
        $smarty->assign('pathMenu', $pathMenu);
        $smarty->assign('pathAddClient', $pathAddClient);
        $smarty->assign('pathListClient', $pathListClient);
        $smarty->assign('user', $user);

        // Подключаем вид
        $smarty->display(ROOT . '/views/client/index.tpl');

        return true;
    }

       /**
     * Action для клиента компании
     */
    public function actionClient($id)
    {
        //Текущий пользовать
        $user = User::getCurrentUser();

        $client = R::load(Constants::TABLE_CLIENT, $id);

        $smarty = SmartyHelper::create();
        $pathMenu = ROOT . '/views/cabinet/includes/menu.tpl';

        $smarty->assign('pathMenu', $pathMenu);
        $smarty->assign('user', $user);
        $smarty->assign('client',$client);

        // Подключаем вид
        $smarty->display(ROOT . '/views/client/client.tpl');

        return true;
    }
}
