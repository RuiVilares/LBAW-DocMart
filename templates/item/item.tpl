{include file='common/header.tpl'}
<!-- Page Content  -->
<div class="container" data-id="{$article.id}" style="padding-bottom:5%">
  <div class="row">
    <div class="hidden-xs col-md-3 col-sm-3">
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
          <img src="./img/{$article.caminho_da_fotografia}" class="img-responsive" alt="" />
          <h2>{$article.nome}</h2>
          <p class="item-description">{$article.descricao}</p>
          <hr>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4><a href="#" onclick="return false" class="item-page hidden-sm hidden-xs" data-toggle="tooltip" title="Na secção 'Classificações' pode ler comentários
e ver classificações de outros clientes sobre
o artigo ou deixar a sua própria opinião!"></a>
                <span class="glyphicon glyphicon-info-sign" aria-hidden="true"> Classificações</span></h4>
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
          <h4><a href="#" onclick="return false" class="item-page hidden-sm hidden-xs" data-toggle="tooltip" title="Na secção 'Comprar' pode escolher o tamanho e cor do artigo
que deseja adicionar ao carrinho de compras para depois
o comprar. Se não desejar efetuar a compra do artigo
pode adicioná-lo aos favoritos.">
            <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></a>Comprar</h4>
        </div>
        <div class="panel-body">
          <h3><strong>Preço:</strong> {$article.preco}€</h3>
          <label for="tamanho">Tamanho:</label>
          <select class="form-control input-sm" id="tamanho">
          {foreach $sizes as $size}
            <option>{$size}</option>
          {/foreach}
          </select>
          <label for="cor">Cor:</label>
          <select class="form-control input-sm" id="cor">
          {foreach $colors as $color}
            <option>{$color}</option>
          {/foreach}
          </select>
          <label for="quantity">Quantidade em stock:</label>
          <input class="form-control input-sm" id="quantity" type="number" value="" data-onload="getQuantity()" readonly>
          <br>
        {if $EMAIL and not $ADMIN}
          <button id="addToCart" class="btn btn-default btn-block text-center" onclick="addToCart()">Adicionar ao carrinho</button>
        {else}
          <button class="btn btn-default btn-block text-center" disabled>Adicionar ao carrinho</button>
        {/if}
        </div>
      </div>
      <div class="panel panel-success">
        <div class="panel-body">
        {if $EMAIL and not $ADMIN}
          <button class="btn btn-default btn-block text-center" onclick="addToFavorites()">Adicionar aos favoritos</button>
        {else}
          <button class="btn btn-default btn-block text-center" disabled>Adicionar aos favoritos</button>
        {/if}
        </div>
      </div>

      {if $ADMIN}
      <div class="panel panel-success">
        <div class="panel-body">
          <a class="btn btn-default btn-block text-center" data-toggle="modal" href="pages/item/editArticle.php?id={$article.id}">Editar artigo</a>
          <br>
          <a class="btn btn-default btn-block text-center" data-toggle="modal" href="#addStock">Adicionar stock</a>
          <br>
          <a class="btn btn-default btn-block text-center" data-toggle="modal" href="#addItem">Adicionar item</a>
          <br>
          <button class="btn btn-danger btn-block text-center" onclick="leaveArticle()">Descontinuar artigo</button>
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
                {foreach $sizes as $size}
                  <option>{$size}</option>
                {/foreach}
                </select>
              </div>
              <div class="form-group">
                <label for="cor">Cor:</label>
                <select class="form-control input-sm" id="corAdd" tabindex="2">
                {foreach $colors as $color}
                  <option>{$color}</option>
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

      <div class="modal fade" id="addItem" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Adicionar item</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="tamanho">Tamanho:</label>
                <select class="form-control input-sm" id="tamanhoAddItem" tabindex="1">
                  <option value="XS">XS</option>
                  <option value="S">S</option>
                  <option value="M">M</option>
                  <option value="L">L</option>
                  <option value="XL">XL</option>
                  <option value="XXL">XXL</option>
                  <option disabled>────</option>
                  <option value="31">31</option>
                  <option value="32">32</option>
                  <option value="33">33</option>
                  <option value="34">34</option>
                  <option value="35">35</option>
                  <option value="36">36</option>
                  <option value="37">37</option>
                  <option value="38">38</option>
                  <option value="39">39</option>
                  <option value="40">40</option>
                  <option value="41">41</option>
                  <option value="42">42</option>
                  <option value="43">43</option>
                  <option value="44">44</option>
                  <option value="45">45</option>
                  <option value="46">46</option>
                  <option value="47">47</option>
                  <option value="48">48</option>
                  <option value="49">49</option>
                </select>
              </div>
              <div class="form-group">
                <label for="cor">Cor:</label>
                <select class="form-control input-sm" id="corAddItem" tabindex="2">
                  <option value="Branco">Branco</option>
                  <option value="Preto">Preto</option>
                  <option value="Azul">Azul</option>
                  <option value="Amarelo">Amarelo</option>
                  <option value="Verde">Verde</option>
                  <option value="Vermelho">Vermelho</option>
                </select>
              </div>
              <div class="form-group">
                <label for="quantity">Quantidade a adicionar:</label>
                <input class="form-control input-sm" id="quantidadeAddItem" type="number" value="1" min="1" tabindex="3">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-success" onclick="addNewItem()">Confirmar</button>
            </div>
          </div>
        </div>
      </div>

      {/if}

    </div>
  </div>
  <!-- /.row -->
</div>
<script src="javascript/review.js" async></script>
{include file='common/footer.tpl'}
