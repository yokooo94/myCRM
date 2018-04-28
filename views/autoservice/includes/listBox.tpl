<table border="1">
        <tr>
         <th>№ Подъемника</th>
         <th>Подъемник</th>
        </tr>
        {foreach from=$autoService->ownBox item=box}
        <tr><td>{$box->id}</td><td><a href="/cabinet/box/{$box->id}">{$box->name}</a></td></tr>
        {/foreach}
       </table>