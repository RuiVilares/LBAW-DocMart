{include file='common/header.tpl'}
<!-- Page Content -->
<div class="container">
      <div class="col-sm-12 col-md-10 col-md-offset-1">
        <h2><a href="#" onclick="return false" class="favorites" data-toggle="tooltip" title="Aqui pode ver os artigos que marcou como favoritos.">
                  <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></a>Favoritos</h2><br>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th> </th>
                        <th> </th>
                        <th class="text-center">Preço</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                {if empty($favorites)}
                <tr>
                  <td><h4>Não existem produtos nos favoritos</h4></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                {else}
                  {foreach $favorites as $favorite}
                    <tr>
                      <td class="col-sm-8 col-md-6">
                        <div class="media">
                          <a class="thumbnail pull-left" href="#" style="margin-right: 2%">
                            <!-- TODO $favorite.caminho da fotografia -->
                            <img class="media-object" alt="{$favorite.nome}" src="./img/{$favorite.caminho_da_fotografia}" style="width: 72px; height: 72px;">
                          </a>
                          <div class="media-body">
                            <h4 class="media-heading"><a href="pages/item/item.php?id={$favorite.id}">{$favorite.nome}</a></h4>
                          </div>
                        </div>
                      </td>
                      <td></td>
                      <td></td>
                      <td class="col-sm-1 col-md-1 text-center">
                        <strong>€{$favorite.preco}</strong>
                      </td>
                      <td class="col-sm-1 col-md-1">
                        <button type="button" class="btn btn-danger" onclick="removeFavorite({$favorite.id})">
                            <span class="glyphicon glyphicon-remove"></span> Remover
                        </button>
                      </td>
                    </tr>
                  {/foreach}
                {/if}
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <td>
                        <a class="btn btn-default" href="." role="button">Voltar</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
{include file='common/footer.tpl'}
