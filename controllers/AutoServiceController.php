<?php

/**
 * Контроллер AutoServiceController
 */
class AutoServiceController
{

    /**
     * Action для автосервисов компании
     */
    public function actionIndex()
    {
        //Текущий пользовать
        $user = User::getCurrentUser();

        if (!empty($_POST)) {
            //Делаем соединение с базой данных
            Database::connect();

            //Добавление нового клиента
            $autoService = R::dispense(Constants::TABLE_AUTOSERVICE);
            $autoService->company = $user->company;
            $autoService->user = $user;
            $autoService->name = $_POST["name"];
            $autoService->phone = $_POST["phone"];
            $autoService->address = $_POST["address"];

            //Сохраняем клиента
            R::store($autoService);
            

            //Обновление контента
            header('Location: ' . $_SERVER['REQUEST_URI']);
        }
        $smarty = SmartyHelper::create();
        $pathMenu = ROOT . '/views/cabinet/includes/menu.tpl';
        $pathAddAutoService = ROOT . '/views/autoservice/includes/addAutoService.tpl';
        $pathListAutoService = ROOT . '/views/autoservice/includes/listAutoService.tpl';
        $smarty->assign('pathMenu', $pathMenu);
        $smarty->assign('pathAddAutoService', $pathAddAutoService);
        $smarty->assign('pathListAutoService', $pathListAutoService);
        $smarty->assign('user', $user);

        // Подключаем вид
        $smarty->display(ROOT . '/views/autoservice/index.tpl');

        return true;
    }

    /**
     * Action для автосервиса
     */
    public function actionAutoService($id)
    {
        //Текущий пользовать
        $user = User::getCurrentUser();
        $autoService = R::load(Constants::TABLE_AUTOSERVICE, $id);
        if (!empty($_POST)) {
            //Делаем соединение с базой данных
            Database::connect();

            //Добавление нового клиента
            $box = R::dispense(Constants::TABLE_BOX);
            $box->autoservice  = $autoService;
            $box->name = $_POST["name"];

            //Сохраняем клиента
            R::store($box);
            

            //Обновление контента
            header('Location: ' . $_SERVER['REQUEST_URI']);
        }
        $smarty = SmartyHelper::create();
        $pathMenu = ROOT . '/views/cabinet/includes/menu.tpl';
        $pathAutoService = ROOT . '/views/autoservice/includes/autoService.tpl';
        $pathAddBox = ROOT . '/views/autoservice/includes/addBox.tpl';
        $pathListBox = ROOT . '/views/autoservice/includes/listBox.tpl';
        $smarty->assign('pathMenu', $pathMenu);
        $smarty->assign('pathAutoService', $pathAutoService);
        $smarty->assign('pathAddBox', $pathAddBox);
        $smarty->assign('pathListBox', $pathListBox);
        $smarty->assign('user', $user);
        $smarty->assign('autoService', $autoService);

        // Подключаем вид
        $smarty->display(ROOT . '/views/autoservice/autoService.tpl');

        return true;
    }
}
