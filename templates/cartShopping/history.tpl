{include file='common/header.tpl'}
<!-- Page Content -->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 container">
  <div class="col-md-1 col-lg-2"></div>
  <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8">
    <h2>
      <a href="#" onclick="return false" class="favorites" data-toggle="tooltip" title="No histórico de compras pode encontrar todos os artigos que já adquiriu.">
      <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
      </a>Histórico de compras
    </h2>
    <br>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Producto</th>
          <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center">Quantidade</th>
          <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center">Preço</th>
          <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center">Total</th>
          <th class="hidden-xs col-sm-2 col-md-2 col-lg-2 text-center">Data</th>
        </tr>
      </thead>
      <tbody>
        {if empty($arts)}
        <tr>
          <td><h4>Não existem compras concretizadas</h4></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        {else}
        {foreach $arts as $art}
        <tr>
          <td>
            <div class="media">
              <a class="thumbnail pull-left" href="pages/item/item.php?id={$art.id}" style="margin-right: 2%"> <img class="media-object" src="./img/{$art.caminho_da_fotografia}" alt="{$art.nome}" style="width: 72px; height: 72px;"> </a>
              <div class="media-body">
                <h4 class="media-heading">
                  <a href="pages/item/item.php?id={$art.id}">{$art.nome}</a>
                </h4>
                <h5 class="media-heading">Tamanho: {$art.tamanho}</h5>
                <h5 class="media-heading">Cor: {$art.cor}</h5>
              </div>
            </div>
          </td>
          <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center"><strong>{$art.quantidade}</strong></td>
          <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center"><strong>€{$art.preco}</strong></td>
          <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center"><strong>€{$art.preco * $art.quantidade}</strong></td>
          <td class="hidden-xs col-sm-2 col-md-2 col-lg-2 text-center"><strong>{$art.data}</strong></td>
        </tr>
        {/foreach}
        {/if}
        <tr>
          <td>
            <a class="btn btn-default" href="." role="button">Voltar</a>
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="col-md-1 col-lg-2"></div>
</div>
{include file='common/footer.tpl'}
