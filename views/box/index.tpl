{include file ="$pathMenu"}
<p>Компания : {$user->company->name}</p>
<p>Личный кабинет пользователя : {$user->email}</p>

<a href="/cabinet/autoservice/{$box->autoservice->id}">Назад</a>

<h3>Подъемник  : {$box->name}</h3>

{include file ="$pathAddRecord"}
{include file ="$pathListRecord"}

