<?php

/**
 * Контроллер BoxController
 */
class BoxController
{

    /**
     * Action для подъемника автосервиса
     */
    public function actionIndex($id)
    {
        //Текущий пользовать
        $user = User::getCurrentUser();

        $box = R::load(Constants::TABLE_BOX, $id);

        if (!empty($_POST)) {
            //Делаем соединение с базой данных
            Database::connect();

            //Добавление нового клиента
            $record = R::dispense(Constants::TABLE_RECORD);
            $record->box = $box;
            $record->user = $user;
            $record->clientId = $_POST["client"];
            $record->dateStart = $_POST["dateStart"];
            $record->dateEnd = $_POST["dateEnd"];

            //Сохраняем клиента
            R::store($record);
            

            //Обновление контента
            header('Location: ' . $_SERVER['REQUEST_URI']);
        }
        $smarty = SmartyHelper::create();
        $pathMenu = ROOT . '/views/cabinet/includes/menu.tpl';
        $pathAddRecord = ROOT . '/views/box/includes/addRecord.tpl';
        $pathListRecord = ROOT . '/views/box/includes/listRecord.tpl';
        $smarty->assign('pathMenu', $pathMenu);
        $smarty->assign('pathAddRecord', $pathAddRecord);
        $smarty->assign('pathListRecord', $pathListRecord);
        $smarty->assign('user', $user);
        $smarty->assign('box', $box);

        // Подключаем вид
        $smarty->display(ROOT . '/views/box/index.tpl');

        return true;
    }
}
