<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 03:38:38
         compiled from "/opt/lbaw/lbaw1511/public_html/final/templates/item/addArticle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179311169457548ca9c6b093-05625893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd8d15288571409c2e9ebfbc28179bd6b0d9a829' => 
    array (
      0 => '/opt/lbaw/lbaw1511/public_html/final/templates/item/addArticle.tpl',
      1 => 1465263517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179311169457548ca9c6b093-05625893',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57548ca9cf5319_22526705',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57548ca9cf5319_22526705')) {function content_57548ca9cf5319_22526705($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container" style="padding-top:1%; padding-bottom:5%; width:50%">
  <form class="form-signin" action="actions/item/addArticle.php" method="post" enctype="multipart/form-data">
    <h2><a href="#" onclick="return false" class="favorites hidden-sm hidden-xs" data-toggle="tooltip" title="Aqui pode adicionar um artigo. Basta preencher os campos pedidos.">
        <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></a>Adicionar artigo</h2>
    <fieldset>
    <legend>Todos os campos são obrigatórios.</legend>
    <div class="form-group">
      <label for="nome">Nome do artigo</label>
      <input type="text" name="nome" id="nome" class="form-control input-md" placeholder="Nome do artigo" tabindex="1" required>
    </div>
    <div class="form-group">
      <label for="descricao">Descrição</label>
      <input type="text" name="descricao" id="descricao" class="form-control input-md" placeholder="Descricao do artigo" tabindex="2" required>
    </div>
    <div class="form-group">
      <label for="preco">Preco</label>
      <input type="number" name="preco" id="preco" class="form-control input-md" placeholder="Preço do artigo" tabindex="3" required>
    </div>
    <div class="form-group">
      <label for="tipo">Tipo</label>
      <select name="tipo" id="tipo" class="form-control input-md" tabindex="4">
        <option value="Casaco">Casaco</option>
        <option value="Camisola">Camisola</option>
        <option value="Calcas">Calças</option>
        <option value="Sapatos">Sapatos</option>
        <option value="Acessorio">Acessório</option>
      </select>
    </div>
    <div class="form-group">
      <label for="genero">Género</label>
      <select name="genero" id="genero" class="form-control input-md" tabindex="5">
        <option value="Homem">Homem</option>
        <option value="Mulher">Mulher</option>
      </select>
    </div>
    <div class="form-group">
      <label for="foto">Imagem</label>
      <input type="file" name="foto" id="foto" accept="image/*" tabindex="6" required>
    </div>
    <div id="items" class="form-group">
      <label for="tipo">Items</label>
      <button type="button" class="btn btn-sm pull-right btn-info" onclick="addInput()">+</button>
      <div class="form-inline">
        <select class="form-control input-sm" name="cor[]">
          <option value="Branco">Branco</option>
          <option value="Preto">Preto</option>
          <option value="Azul">Azul</option>
          <option value="Amarelo">Amarelo</option>
          <option value="Verde">Verde</option>
          <option value="Vermelho">Vermelho</option>
        </select>
        <select class="form-control input-sm" name="tamanho[]">
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
        <input type="number" name="quantidade[]" class="form-control input-sm" min="0" placeholder="Quantidade" required>
      </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-md-12">
            <input class="btn btn-md btn-block" type="submit" value="Adicionar">
        </div>
    </div>
    </fieldset>
  </form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
