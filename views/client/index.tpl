{include file ="$pathMenu"}
<p>Компания : {$user->company->name}</p>
<p>Личный кабинет пользователя : {$user->email}</p>


<h2>Клиенты компании</h2>

{include file ="$pathAddClient"}
{include file ="$pathListClient"}
