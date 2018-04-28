<h3>Новая запись</h3>
<form action="" method="post">
    <p>Клиент: <select name="client">
    <option selected>Выберите клиента</option>
    {foreach from=$box->autoservice->company->ownClient item=client}
        <option value="{$client->id}">{$client->name}</option>
        {/foreach}
   </select></p>
    <p>Начало: <input type="datetime-local" name="dateStart" /></p>
    <p>Конец: <input type="datetime-local" name="dateEnd" /></p>
    <p><input type="submit" /></p>
</form>
