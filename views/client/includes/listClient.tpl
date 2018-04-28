<table border="1">
        <tr>
         <th>№ Клиента</th>
         <th>Имя</th>
         <th>Телефон</th>
         <th>Автомобиль</th>
         <th>Рег. Номер</th>
        </tr>
        {foreach from=$user->company->ownClient item=client}
        <tr><td>{$client->id}</td><td><a href="/cabinet/client/{$client->id}">{$client->name}</a></td><td>{$client->phone}</td><td>{$client->car}</td><td>{$client->carNumber}</td></tr>
        {/foreach}
       </table>