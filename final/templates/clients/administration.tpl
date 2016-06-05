{include file='common/header.tpl'}
<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-10 col-md-offset-1">
      <table class="table">
        <thead class="thead-default">
          <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Utilizador</th>
            <th>Email</th>
            <th>Nr de compras</th>
            <th>Nr de avaliações</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          {foreach $clients as $client}
          {if $client.desativado == 'true'}
          <tr class="danger">
          {else}
          <tr>
          {/if}
            <th scope="row">{$client.id}</th>
            <td>{$client.nome}</td>
            <td>{$client.username}</td>
            <td>{$client.email}</td>
            <td>0</td>
            <td>0</td>
            {if $client.desativado == 'true'}
            <td><button class="btn btn-success" onclick="lock({$client.id_cliente}, 'false')">Desbloquear</button></td>
            {else}
            <td><button class="btn btn-danger" onclick="lock({$client.id_cliente}, 'true')">Bloquear</button></td>
            {/if}
          </tr>
          {/foreach}
        </tbody>
      </table>
    </div>
  </div>
</div>
{include file='common/footer.tpl'}
