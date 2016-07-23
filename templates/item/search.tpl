{include file='common/header.tpl'}
<!-- Page Content -->
<div class="container" style="padding-bottom:5%">

  <div class="dropdown" style="float:right;">
    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
      Artigos por página
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
      <li><a href="actions/item/search.php?search={$search}&nItems=6">6 artigos</a></li>
      <li><a href="actions/item/search.php?search={$search}&nItems=12">12 artigos</a></li>
      <li><a href="actions/item/search.php?search={$search}&nItems=24">24 artigos</a></li>
    </ul>
  </div>

  <div class="row">

    <div class="col-md-9">

      <div class="row search-div">
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
        {foreachelse}
        <h3>Não foi encontrado nenhum artigo.</h3>
        {/foreach}
      </div>

      <ul class="pagination">
        {for $foo=1 to $page}
        <li
        {if $foo == $page}
        class="active"
        {/if}
        ><a class="pages" href="#" id="{-$lastId}" onclick='post("actions/item/search.php?search={$search}&nItems={$nItems}&page={$foo}",{ldelim}"lastId": "{-$lastId}"{rdelim}); return false;'>{$foo}</a></li>
        {/for}
        {for $foo=$page to $numPages}
        {if $foo != $page}
        <li><a href="#" onclick='post("actions/item/search.php?search={$search}&nItems={$nItems}&page={$foo}",{ldelim}"lastId": "{$lastId+1}"{rdelim}); return false;'>{$foo}</a></li>
        {/if}
        {/for}
      </ul>

    </div>

  </div>

</div>

<script src="javascript/search.js"></script>
{include file='common/footer.tpl'}