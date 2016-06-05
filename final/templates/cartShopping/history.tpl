{include file='common/header.tpl'}
<!-- Page Content -->
<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-10 col-md-offset-1">
      <h2>Histórico de compras</h2><br>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Producto</th>
              <th>Quantidade</th>
              <th class="text-center">Preço</th>
              <th class="text-center">Total</th>
              <th class="text-center">Data</th>
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
                    <td class="col-sm-8 col-md-6">
                      <div class="media">
                        <a class="thumbnail pull-left" href="pages/item/item.php?id={$art.id}" style="margin-right: 2%"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="pages/item/item.php?id={$art.id}">{$art.nome}</a></h4>
                          <h5 class="media-heading">Tamanho: {$art.tamanho}</h5>
                          <h5 class="media-heading">Cor: {$art.cor}</h5>
                        </div>
                      </div>
                    </td>
                    <td class="col-sm-1 col-md-1 text-center"><strong>{$art.quantidade}</strong></td>
                    <td class="col-sm-1 col-md-1 text-center"><strong>€{$art.preco}</strong></td>
                    <td class="col-sm-1 col-md-1 text-center"><strong>€{$art.preco * $art.quantidade}</strong></td>
                    <td class="col-sm-1 col-md-1 text-center"><strong>{$art.data}</strong></td>
                  </tr>
                {/foreach}
              {/if}
                  <tr>
                    <td>   </td>
                    <td>   </td>
                    <td>   </td>
                    <td>
                      <td>
                        <a class="btn btn-default" href="." role="button">Voltar</a>
                      </td>
                  </tr>
              </tbody>
            </table>
        </div>
    </div>
</div>
{include file='common/footer.tpl'}
