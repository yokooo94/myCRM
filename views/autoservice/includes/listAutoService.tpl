<table border="1">
        <tr>
         <th>№ Автосервиса</th>
         <th>Имя</th>
         <th>Телефон</th>
         <th>Адрес</th>
        </tr>
        {foreach from=$user->company->ownAutoservice item=autoservice}
        <tr><td>{$autoservice->id}</td><td><a href="/cabinet/autoservice/{$autoservice->id}">{$autoservice->name}</a></td><td>{$autoservice->phone}</td><td>{$autoservice->address}</td></tr>
        {/foreach}
       </table>