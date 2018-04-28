<?php

return array(
    //Подъемники
    'cabinet/box/([0-9]+)' => 'box/index/$1', //actionIndix в BoxController

    //Автосервисы
    'cabinet/autoservice/([0-9]+)' => 'autoService/autoService/$1', //actionAutoService в AutoServiceController
    'cabinet/autoservice' => 'autoService/index', //actionIndex в AutoServiceController

    //Клиенты
    'cabinet/client/([0-9]+)' => 'client/client/$1', //actionClient в ClientController
    'cabinet/client' => 'client/index', //actionIndex в ClientController

    //Кабинет
    'cabinet/signIn' => 'cabinet/signIn', // actionIndex в SignInController
    'cabinet/signUp' => 'cabinet/signUp', // actionIndex в SignUpController
    'cabinet/logOut' => 'cabinet/logOut', // actionIndex в LogOutController
    'cabinet' => 'cabinet/index', // actionIndex в CabinetController
);
