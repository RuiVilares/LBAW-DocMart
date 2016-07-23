{include file='common/header.tpl'}

<div class="container" style="padding-top:1%; padding-bottom:5%; width:50%">
  <form class="form-signin" action="actions/item/editArticle.php" method="post" enctype="multipart/form-data">
    <h2>Editar artigo</h2>
    <fieldset>
    <legend>Todos os campos são obrigatórios.</legend>
    <div class="form-group">
      <label for="nome">Nome do artigo</label>
      <input type="text" name="nome" id="nome" class="form-control input-md" value="{$article.nome}" tabindex="1" required>
    </div>
    <div class="form-group">
      <label for="descricao">Descrição</label>
      <input type="text" name="descricao" id="descricao" class="form-control input-md" value="{$article.descricao}" tabindex="2" required>
    </div>
    <div class="form-group">
      <label for="preco">Preco</label>
      <input type="number" name="preco" id="preco" class="form-control input-md" value="{$article.preco}" tabindex="3" required>
    </div>
    <div class="form-group">
      <label for="tipo">Tipo</label>
      <select name="tipo" id="tipo" class="form-control input-md" tabindex="4" required>
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
      <label for="genero">Genero</label>
      <select name="genero" id="genero" class="form-control input-md" tabindex="5" required>
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
      <label for="imagem">Imagem</label>
      <input type="file" name="foto" id="foto" accept="image/*" tabindex="6">
    </div>
    <div class="form-group">
      <input type="number" name="id" id="id" value="{$article.id}" hidden>
    </div>
    <div class="row">
        <div class="col-xs-6 col-md-12">
            <input class="btn btn-md btn-block" type="submit" value="Editar">
        </div>
    </div>
  </form>
</div>
{include file='common/footer.tpl'}
