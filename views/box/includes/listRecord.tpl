<table border="1">
        <tr>
         <th>№ Записи</th>
         <th>Клиент</th>
         <th>Автомобиль</th>
          <th>Начало</th>
           <th>Конец</th>
        </tr>
        {foreach from=$box->ownRecord item=record}
        <tr><td>{$record->id}</td><td><a href="/cabinet/client/{$record->client->id}">{$record->client->name}</a></td><td>{$record->client->car}</td><td>{$record->dateStart}</td><td>{$record->dateEnd}</td></tr>
        {/foreach}
       </table>