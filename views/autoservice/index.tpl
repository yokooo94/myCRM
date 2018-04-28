{include file ="$pathMenu"}
<p>Компания : {$user->company->name}</p>
<p>Личный кабинет пользователя : {$user->email}</p>


<h2>Автосервисы компании</h2>


{include file ="$pathAddAutoService"}
{include file ="$pathListAutoService"}

