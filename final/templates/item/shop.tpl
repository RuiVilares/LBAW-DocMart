{include file='common/header.tpl'}
<!-- Page Content -->
<div class="container" style="padding-bottom:5%">

  <div class="row">

    <div class="col-md-3">
      <p class="list-group-item"><b>{$genre}</b></p>
      <div class="list-group">
        <a href="pages/item/shop.php?genre={$genre}&type=Casaco" class="list-group-item">Casacos</a>
        <a href="pages/item/shop.php?genre={$genre}&type=Camisola" class="list-group-item">Camisolas</a>
        <a href="pages/item/shop.php?genre={$genre}&type=Calcas" class="list-group-item">Calças</a>
        <a href="pages/item/shop.php?genre={$genre}&type=Sapatos" class="list-group-item">Sapatos</a>
        <a href="pages/item/shop.php?genre={$genre}&type=Acessorio" class="list-group-item">Acessórios</a>
      </div>

      <form action="pages/item/shop.php?genre={$genre}&type=Casaco" method="post">
      <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#collapse1">Tamanho</a>
            </h4>
          </div>
          <div id="collapse1" class="panel-collapse collapse">
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="XS">XS</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="S">S</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="M">M</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="L">L</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="XL">XL</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="XXL">XXL</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="31">31</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="32">32</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="33">33</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="34">34</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="35">35</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="36">36</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="37">37</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="38">38</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="39">39</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="40">40</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="41">41</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="42">42</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="43">43</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="44">44</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="45">45</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="46">46</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="47">47</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="48">48</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="49">49</label>
            </div>
          </div>
        </div>
      </div>

      <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#collapse2">Cor</a>
            </h4>
          </div>
          <div id="collapse2" class="panel-collapse collapse">
            <div class="checkbox">
              <label><input type="checkbox" name="colors[]" value="Branco">Branco</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="colors[]" value="Preto">Preto</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="colors[]" value="Azul">Azul</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="colors[]" value="Amarelo">Amarelo</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="colors[]" value="Verde">Verde</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="colors[]" value="Vermelho">Vermelho</label>
            </div>
          </div>
        </div>
      </div>

      <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#collapse3">Preço</a>
            </h4>
          </div>
          <div id="collapse3" class="panel-collapse collapse">
            <div>
              <label for="priceMin">Minimum:</label>
              <input type="number" name="minPrice" class="form-control" id="priceMin" min="0" max="9998" value ="0" step="1"></input>
            </div>
            <div>
              <label for="priceMax">Maximum:</label>
              <input type="number" name="maxPrice" class="form-control" id="priceMax" min="0" max="9999" value="9999" step="1"></input>
            </div>
          </div>
        </div>
      </div>
      <input type="submit" class="btn" value="Pesquisar">
    </form>
    </div>

    <div class="dropdown" style="float:right;">
      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Artigos por página
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <li><a href="pages/item/shop.php?genre={$genre}&type={$type}&nItems=5">5 artigos</a></li>
        <li><a href="pages/item/shop.php?genre={$genre}&type={$type}&nItems=10">10 artigos</a></li>
        <li><a href="pages/item/shop.php?genre={$genre}&type={$type}&nItems=20">20 artigos</a></li>
      </ul>
    </div>

    <div class="col-md-9">

      <div class="row">

        {foreach from=$items item=itemV}
        <div class="col-sm-4 col-lg-4 col-md-4">
          <div class="thumbnail">
            <img src="http://placehold.it/320x150" alt="{$itemV['caminho_da_fotografia']}">
            <div class="caption">
              <h4 class="pull-right">€{$itemV['preco']}</h4>
              <h4><a href="pages/item/item.php?id={$itemV['id']}">{$itemV['nome']}</a>
              </h4>
              <p>{$itemV['descricao']}</p>
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
