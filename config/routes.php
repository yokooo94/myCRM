<?php

return array(
    //Автосервисы
    'cabinet/autoservice/([0-9]+)' => 'autoService/autoService/$1', //actionAutoSerivce в AutoServiceController
    'cabinet/autoservice' => 'autoService/index', //actionIndex в AutoServiceController

    //Клиенты
    'cabinet/client' => 'client/index', //actionIndex в ClientController

    //Кабинет
    'cabinet/signIn' => 'cabinet/signIn', // actionIndex в SignInController
    'cabinet/signUp' => 'cabinet/signUp', // actionIndex в SignUpController
    'cabinet/logOut' => 'cabinet/logOut', // actionIndex в LogOutController
    'cabinet' => 'cabinet/index', // actionIndex в CabinetController
);
