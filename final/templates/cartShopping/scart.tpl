{include file='common/header.tpl'}
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Quantidade</th>
                        <th class="text-center">Preço</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                  {if empty($arts)}
                    <tr>
                      <td></td>
                      <td><h4>Não existem produtos no carrinho</h4></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  {else}
                    {foreach $arts as $art}
                      <tr>
                        <td class="col-sm-8 col-md-6">
                          <div class="media">
                            <a class="thumbnail pull-left" href="pages/item/item.php?id={$art.id}" style="margin-right: 2%">
                              <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;">
                            </a>
                            <div class="media-body">
                              <h4 class="media-heading"><a href="pages/item/item.php?id={$art.id}">{$art.nome}</a></h4>
                              <h5 class="media-heading">Tamanho: {$art.tamanho}</h5>
                              <h5 class="media-heading">Cor: {$art.cor}</h5>
                            </div>
                          </div>
                        </td>
                        <td class="col-sm-1 col-md-1" style="text-align: center"><strong>{$art.quantidade}</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>€{$art.preco}</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>€{$art.preco * $art.quantidade}</strong></td>
                        <td class="col-sm-1 col-md-1">
                          <button type="button" class="btn btn-danger" onclick="removeFromCart({$art.id}, '{$art.tamanho}', '{$art.cor}')">
                            <span class="glyphicon glyphicon-remove"></span> Remover
                          </button>
                        </td>
                      </tr>
                    {/foreach}
                  {/if}
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><h3>Total</h3></td>
                      <td id="totalCart" data-onload="getTotal()" class="text-right"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                        <a class="btn btn-default" href=".">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continuar compras
                        </a>
                      </td>
                      <td>
                        <a class="btn btn-success" href="pages/cartShopping/buy.php">
                            Finalizar compras <span class="glyphicon glyphicon-play"></span>
                        </a>
                      </td>
                    </tr>
                </tbody>
            </table>
            <br>
        </div>
    </div>
</div>
{include file='common/footer.tpl'}
