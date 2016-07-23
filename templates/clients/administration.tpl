{include file='common/header.tpl'}
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 container">
  <div class="col-sm-1 col-md-1 col-lg-1"></div>
  <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
    <table class="table">
      <thead class="thead-default">
        <tr>
          <th>#</th>
          <th>Nome</th>
          <th>Utilizador</th>
          <th>Email</th>
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
          {if $client.desativado == 'true'}
          <td><button class="btn btn-success btn-block" onclick="lock({$client.id_cliente}, 'false')">Desbloquear</button></td>
          {else}
          <td><button class="btn btn-danger btn-block" onclick="lock({$client.id_cliente}, 'true')">Bloquear</button></td>
          {/if}
        </tr>
        {/foreach}
      </tbody>
    </table>
    </div>
  <div class="col-sm-1 col-md-1 col-lg-1"></div>
</div>
{include file='common/footer.tpl'}
