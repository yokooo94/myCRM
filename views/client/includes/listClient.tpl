<table border="1">
        <tr>
         <th>№ Клиента</th>
         <th>Имя</th>
         <th>Телефон</th>
         <th>Автомобиль</th>
         <th>Рег. Номер</th>
        </tr>
        {foreach from=$user->company->ownClient item=client}
        <tr><td>{$client->id}</td><td>{$client->name}</td><td>{$client->phone}</td><td>{$client->car}</td><td>{$client->carNumber}</td></tr>
        {/foreach}
       </table>