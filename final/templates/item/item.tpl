{include file='common/header.tpl'}
<!-- Page Content  -->
<div class="container" data-id="{$article.id}" style="padding-bottom:5%">
  <div class="row">
    <div class="col-md-3 col-sm-3">
      <p class="list-group-item"><b>Mulher</b></p>
        <div class="list-group">
          <a href="pages/item/shop.php?genre=Mulher&type=Casaco" class="list-group-item">Casacos</a>
          <a href="pages/item/shop.php?genre=Mulher&type=Camisola" class="list-group-item">Camisolas</a>
          <a href="pages/item/shop.php?genre=Mulher&type=Calcas" class="list-group-item">Calças</a>
          <a href="pages/item/shop.php?genre=Mulher&type=Sapatos" class="list-group-item">Sapatos</a>
        </div>

        <p class="list-group-item"><b>Homem</b></p>
        <div class="list-group">
          <a href="pages/item/shop.php?genre=Homem&type=Casaco" class="list-group-item">Casacos</a>
          <a href="pages/item/shop.php?genre=Homem&type=Camisola" class="list-group-item">Camisolas</a>
          <a href="pages/item/shop.php?genre=Homem&type=Calcas" class="list-group-item">Calças</a>
          <a href="pages/item/shop.php?genre=Homem&type=Sapatos" class="list-group-item">Sapatos</a>
        </div>

        <p class="list-group-item"><b>Acessórios</b></p>
        <div class="list-group">
          <a href="pages/item/shop.php?genre=Homem&type=Acessorio" class="list-group-item">Homem</a>
          <a href="pages/item/shop.php?genre=Mulher&type=Acessorio" class="list-group-item">Mulher</a>
        </div>
    </div>
    <div class="col-md-6 col-sm-6">
      <div class="row">
        <div class="col-md-12  col-sm-12">
          <!-- TODO {$article.caminho_da_fotografia} -->
          <img src="http://oudeltasig.org/wp-content/uploads/2013/08/vintage-leather-jacket.jpg" class="img-responsive" alt="" />
          <h2>{$article.nome}</h2>
          <p>{$article.descricao}</p>
          <hr>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>Classificações</h4>
            </div>

          <div class="panel-body">
          {if $EMAIL and not $ADMIN}
            <div class="well well-sm">
              <div class="text-right">
                <span class="btn btn-default" id="open-review-box">{if $firstComment}Classificar{else}Atualizar classificação{/if}</span>
              </div>
              <div class="row" id="post-review-box" style="display:none;">
                <div class="col-md-12">
                  <form accept-charset="UTF-8" id="reviewForm">
                    <input id="id" style="display:none;" value="{$article.id}"></input>
                    <input id="firstComment" style="display:none;" value="{$firstComment}"></input>
                    <input id="ratings-hidden" name="rating" type="hidden">
                      <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Escreva aqui a sua opinião..." rows="5">{if not $firstComment}{$ownComment['descricao']|escape:'htmlall'}{/if}</textarea>
                    <div class="text-right">
                      <div class="stars starrr" id="stars" data-rating="{if not $firstComment}{$ownComment['classificacao']}{/if}"></div>
                      <a class="btn btn-danger" href="#" id="close-review-box" style="display:none;">
                      <span class="glyphicon glyphicon-remove"></span> Cancelar</a>
                      <button class="btn btn-success" type="submit">Enviar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          {/if}


            <div class="commentsDiv">
            {foreach from=$comments item=comment}
                <hr>
                {if $ADMIN}
                <button type="button" class="btn btn-danger pull-right" onclick="removeComment({$comment.id_artigo}, {$comment.id_cliente})">
                  <span class="glyphicon glyphicon-remove"></span> Remover
                </button>
                {/if}
                <p>{$comment['descricao']|escape:'htmlall'}</p>
                <p>
                  {for $foo=1 to $comment['classificacao']}
                  <span class="glyphicon glyphicon-star"></span>
                  {/for}
                  {for $foo=$comment['classificacao'] to 4}
                  <span class="glyphicon glyphicon-star-empty"></span>
                  {/for}
                </p>
            {/foreach}
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-3">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4>Comprar</h4>
        </div>
        <div class="panel-body">
          <h3><strong>Preço:</strong> {$article.preco}€</h3>
          <label for="tamanho">Tamanho:</label>
          <select class="form-control input-sm" id="tamanho">
          {foreach $items as $item}
            <option>{$item.tamanho}</option>
          {/foreach}
          </select>
          <label for="cor">Cor:</label>
          <select class="form-control input-sm" id="cor">
          {foreach $items as $item}
            <option>{$item.cor}</option>
          {/foreach}
          </select>
          <label for="quantity">Quantidade em stock:</label>
          <input class="form-control input-sm" id="quantity" type="number" value="" data-onload="getQuantity()" readonly>
          <br>
        {if $EMAIL and not $ADMIN}
          <center><button id="addToCart" class="btn btn-default btn-block" onclick="addToCart()">Adicionar ao carrinho</button></center>
        {else}
          <center><button class="btn btn-default btn-block" disabled>Adicionar ao carrinho</button></center>
        {/if}
        </div>
      </div>
      <div class="panel panel-success">
        <div class="panel-body">
        {if $EMAIL and not $ADMIN}
          <center><button class="btn btn-default btn-block" onclick="addToFavorites()">Adicionar aos favoritos</button></center>
        {else}
          <center><button class="btn btn-default btn-block" disabled>Adicionar aos favoritos</button></center>
        {/if}
        </div>
      </div>

      {if $ADMIN}
      <div class="panel panel-success">
        <div class="panel-body">
          <center><a class="btn btn-default btn-block" data-toggle="modal" href="#editArticle">Editar artigo</a></center>
          <br>
          <center><a class="btn btn-default btn-block" data-toggle="modal" href="#addStock">Adicionar stock</a></center>
          <br>
          <center><button class="btn btn-danger btn-block" onclick="leaveArticle()">Descontinuar artigo</button></center>
        </div>
      </div>

      <div class="modal fade" id="editArticle" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Editar artigo</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <input type="text" name="nome" id="nomeEdit" class="form-control input-md" value="{$article.nome}" tabindex="1">
              </div>
      				<div class="form-group">
                <input type="text" name="descricao" id="descricaoEdit" class="form-control input-md" value="{$article.descricao}" tabindex="2">
              </div>
      				<div class="form-group">
                <input type="number" name="preco" id="precoEdit" class="form-control input-md" value="{$article.preco}" tabindex="3">
              </div>
      				<div class="form-group">
      					<select name="tipo" id="tipoEdit" class="form-control input-md" tabindex="4">
                  {if $article.tipo eq 'Casaco'}
                  <option value="Casaco" selected>Casaco</option>
                  {else}
                  <option value="Casaco">Casaco</option>
                  {/if}
                  {if $article.tipo eq 'Camisola'}
                  <option value="Camisola" selected>Camisola</option>
                  {else}
                  <option value="Camisola">Camisola</option>
                  {/if}
                  {if $article.tipo eq 'Calcas'}
                  <option value="Calcas" selected>Calcas</option>
                  {else}
                  <option value="Calcas">Calcas</option>
                  {/if}
                  {if $article.tipo eq 'Sapatos'}
                  <option value="Sapatos" selected>Sapatos</option>
                  {else}
                  <option value="Sapatos">Sapatos</option>
                  {/if}
                  {if $article.tipo eq 'Acessorio'}
                  <option value="Acessorio" selected>Acessorio</option>
                  {else}
                  <option value="Acessorio">Acessorio</option>
                  {/if}
        				</select>
              </div>
      				<div class="form-group">
      					<select name="genero" id="generoEdit" class="form-control input-md" tabindex="5">
                  {if $article.genero eq 'Homem'}
          				<option value="Homem" selected>Homem</option>
                  {else}
                  <option value="Homem">Homem</option>
                  {/if}
                  {if $article.genero eq 'Mulher'}
          				<option value="Mulher" selected>Mulher</option>
                  {else}
                  <option value="Mulher">Mulher</option>
                  {/if}
        				</select>
              </div>
      				<div class="form-group">
      					<label id="fotoLabelEdit" class="btn btn-default btn-file form-control">
      						Choose a image to upload<input type="file" name="foto" id="fotoEdit" accept="image/*" style="display: none;" tabindex="6">
      					</label>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-success" onclick="editArticle()">Confirmar</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="addStock" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Adicionar stock</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="tamanho">Tamanho:</label>
                <select class="form-control input-sm" id="tamanhoAdd" tabindex="1">
                {foreach $items as $item}
                  <option>{$item.tamanho}</option>
                {/foreach}
                </select>
              </div>
              <div class="form-group">
                <label for="cor">Cor:</label>
                <select class="form-control input-sm" id="corAdd" tabindex="2">
                {foreach $items as $item}
                  <option>{$item.cor}</option>
                {/foreach}
                </select>
              </div>
              <div class="form-group">
                <label for="quantity">Quantidade a adicionar:</label>
                <input class="form-control input-sm" id="quantidadeAdd" type="number" value="1" min="1" tabindex="3">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-success" onclick="addStock()">Confirmar</button>
            </div>
          </div>
        </div>
      </div>

      {/if}

    </div>
  </div>
  <!-- /.row -->
</div>
{include file='common/footer.tpl'}
