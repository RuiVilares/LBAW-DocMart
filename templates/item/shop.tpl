{include file='common/header.tpl'}
<!-- Page Content -->
<div class="container" style="padding-bottom:5%">

  <div class="row">

    <div class="col-md-3">
      <p class="list-group-item"><b><a href="#" onclick="return false" class="item-type" data-toggle="tooltip" title="Aqui pode escolher o tipo de
peça que pretende visualizar.">
        <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></a>{$genre}</b></p>
      <div class="list-group">
        <a href="pages/item/shop.php?genre={$genre}&type=Casaco" class="list-group-item">Casacos</a>
        <a href="pages/item/shop.php?genre={$genre}&type=Camisola" class="list-group-item">Camisolas</a>
        <a href="pages/item/shop.php?genre={$genre}&type=Calcas" class="list-group-item">Calças</a>
        <a href="pages/item/shop.php?genre={$genre}&type=Sapatos" class="list-group-item">Sapatos</a>
        <a href="pages/item/shop.php?genre={$genre}&type=Acessorio" class="list-group-item">Acessórios</a>
      </div>

      <form action="pages/item/shop.php?genre={$genre}&type={$type}" method="post">
        <div class="panel-group">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse1" class="collapsed">Tamanho</a>
              </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse">
              <div class="row">
                <div class="col-md-4 checkbox">
                  <label><input class="checkbox-input" type="checkbox" name="sizes[]" value="XS">XS</label>
                </div>
                <div class="col-md-4 checkbox">
                  <label><input type="checkbox" name="sizes[]" value="S">S</label>
                </div>
                <div class="col-md-4 checkbox">
                  <label><input type="checkbox" name="sizes[]" value="M">M</label>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 checkbox">
                  <label><input type="checkbox" name="sizes[]" value="L">L</label>
                </div>
                <div class="col-md-4 checkbox">
                  <label><input type="checkbox" name="sizes[]" value="XL">XL</label>
                </div>
                <div class="col-md-4 checkbox">
                  <label><input type="checkbox" name="sizes[]" value="XXL">XXL</label>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-4 checkbox">
                  <label><input type="checkbox" name="sizes[]" value="31">31</label>
                </div>
                <div class="col-md-4 checkbox">
                  <label><input type="checkbox" name="sizes[]" value="32">32</label>
                </div>
                <div class="col-md-4 checkbox">
                  <label><input type="checkbox" name="sizes[]" value="33">33</label>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 checkbox">
                  <label><input type="checkbox" name="sizes[]" value="34">34</label>
                </div>
                <div class="col-md-4 checkbox">
                  <label><input type="checkbox" name="sizes[]" value="35">35</label>
                </div>
                <div class="col-md-4 checkbox">
                  <label><input type="checkbox" name="sizes[]" value="36">36</label>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 checkbox">
                  <label><input type="checkbox" name="sizes[]" value="37">37</label>
                </div>
                <div class="col-md-4 checkbox">
                  <label><input type="checkbox" name="sizes[]" value="38">38</label>
                </div>
                <div class="col-md-4 checkbox">
                  <label><input type="checkbox" name="sizes[]" value="39">39</label>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 checkbox">
                  <label><input type="checkbox" name="sizes[]" value="40">40</label>
                </div>
                <div class="col-md-4 checkbox">
                  <label><input type="checkbox" name="sizes[]" value="41">41</label>
                </div>
                <div class="col-md-4 checkbox">
                  <label><input type="checkbox" name="sizes[]" value="42">42</label>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 checkbox">
                  <label><input type="checkbox" name="sizes[]" value="43">43</label>
                </div>
                <div class="col-md-4 checkbox">
                  <label><input type="checkbox" name="sizes[]" value="44">44</label>
                </div>
                <div class="col-md-4 checkbox">
                  <label><input type="checkbox" name="sizes[]" value="45">45</label>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 checkbox">
                  <label><input type="checkbox" name="sizes[]" value="46">46</label>
                </div>
                <div class="col-md-4 checkbox">
                  <label><input type="checkbox" name="sizes[]" value="47">47</label>
                </div>
                <div class="col-md-4 checkbox">
                  <label><input type="checkbox" name="sizes[]" value="48">48</label>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 checkbox">
                  <label><input type="checkbox" name="sizes[]" value="49">49</label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="panel-group">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse2" class="collapsed">Cor</a>
              </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
              <div class="row">
              <div class="col-md-6 checkbox">
                <label><input type="checkbox" name="colors[]" value="Branco">Branco</label>
              </div>
              <div class="col-md-6 checkbox">
                <label><input type="checkbox" name="colors[]" value="Preto">Preto</label>
              </div>
              </div>
              <div class="row">
              <div class="col-md-6 checkbox">
                <label><input type="checkbox" name="colors[]" value="Azul">Azul</label>
              </div>
              <div class="col-md-6 checkbox">
                <label><input type="checkbox" name="colors[]" value="Amarelo">Amarelo</label>
              </div>
              </div>
              <div class="row">
              <div class="col-md-6 checkbox">
                <label><input type="checkbox" name="colors[]" value="Verde">Verde</label>
              </div>
              <div class="col-md-6 checkbox">
                <label><input type="checkbox" name="colors[]" value="Vermelho">Vermelho</label>
              </div>
              </div>
            </div>
          </div>
        </div>

        <div class="panel-group">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse3" class="collapsed">Preço</a>
              </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
              <div class="row">
              <div class="col-md-6">
                <label for="priceMin">Mínimo:</label>
                <input type="number" name="minPrice" class="form-control" placeholder="0€" id="priceMin" min="0" max="9998" step="1">
              </div>
              <div class="col-md-6">
                <label for="priceMax">Máximo:</label>
                <input type="number" name="maxPrice" class="form-control" placeholder="9999€" id="priceMax" min="0" max="9999" step="1">
              </div>
              </div>
            </div>
          </div>
        </div>
        <input type="submit" class="btn" value="Pesquisar"><a href="#" onclick="return false" class="item-advanced" data-toggle="tooltip" title="Para uma pesquisa avançada pode selecionar variados
tamanhos, cores e preços que pretenda visualizar.
Para a escolha ter efeito basta carregar no botão Pesquisar."></a>
        <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
      </form>
    </div>

    <div class="dropdown" style="float:right;">
      <a href="#" onclick="return false" class="item-advanced" data-toggle="tooltip" title="Aqui pode escolher quantos artigos
quer visualizar em cada página.">
        <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></a>
      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Artigos por página
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <li><a href="pages/item/shop.php?genre={$genre}&type={$type}&nItems=6">6 artigos</a></li>
        <li><a href="pages/item/shop.php?genre={$genre}&type={$type}&nItems=12">12 artigos</a></li>
        <li><a href="pages/item/shop.php?genre={$genre}&type={$type}&nItems=24">24 artigos</a></li>
      </ul>
    </div>

    <div class="col-md-9">

      <div class="row">

        {foreach from=$items item=itemV}
        <div class="col-sm-4 col-lg-4 col-md-4">
          <div class="thumbnail">
            <img src="./img/{$itemV.caminho_da_fotografia}" alt="{$itemV['nome']}" style="width: auto;height: 15em;">
            <div class="caption">
              <h4 class="pull-right">€{$itemV['preco']}</h4>
              <h4><a href="pages/item/item.php?id={$itemV['id']}">{$itemV['nome']}</a>
              </h4>
              <p class="item-short-description">{$itemV['descricao']}</p>
            </div>
            <div class="ratings">
              <p class="pull-right">{$itemV['count']} avaliações</p>
              <p>
                {for $foo=1 to $itemV['avg']}
                <span class="glyphicon glyphicon-star"></span>
                {/for}
                {for $foo=$itemV['avg'] to 4}
                <span class="glyphicon glyphicon-star-empty"></span>
                {/for}
              </p>
            </div>
          </div>
        </div>
        {/foreach}
      </div>

      <ul class="pagination">
        {for $foo=1 to $page}
        <li
        {if $foo == $page}
        class="active"
        {/if}
        ><a class="pages" href="#" id="{-$lastId}" onclick='post("pages/item/shop.php?genre={$genre}&type={$type}&nItems={$nItems}&page={$foo}",{ldelim}"lastId": "{-$lastId}"{rdelim}); return false;'>{$foo}</a></li>
        {/for}
        {for $foo=$page to $numPages}
        {if $foo != $page}
        <li><a href="#" onclick='post("pages/item/shop.php?genre={$genre}&type={$type}&nItems={$nItems}&page={$foo}",{ldelim}"lastId": "{$lastId+1}"{rdelim}); return false;'>{$foo}</a></li>
        {/if}
        {/for}
      </ul>

    </div>

  </div>

</div>

<script src="javascript/items.js"></script>
{include file='common/footer.tpl'}
