{include file ="$pathMenu"}
<p>Компания : {$user->company->name}</p>
<p>Личный кабинет пользователя : {$user->email}</p>

<a href="/cabinet/client">Назад</a>

<h3>Клиент : {$client->name}</h3>

<p>Телефон : {$client->phone}</p>
<p>Автомобиль : {$client->car}</p>
<p>Рег. номер : {$client->carNumber}</p>

