<?php /* Smarty version Smarty-3.1.15, created on 2016-06-06 16:11:28
         compiled from "/opt/lbaw/lbaw1511/public_html/final/templates/item/editArticle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:659988946575584905b6292-93339595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05e8497efbb52664f68627c4318c949653587161' => 
    array (
      0 => '/opt/lbaw/lbaw1511/public_html/final/templates/item/editArticle.tpl',
      1 => 1465221908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '659988946575584905b6292-93339595',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_575584906f4d91_73417213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575584906f4d91_73417213')) {function content_575584906f4d91_73417213($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container" style="padding-top:1%; padding-bottom:5%; width:50%">
  <form class="form-signin" action="actions/item/editArticle.php" method="post" enctype="multipart/form-data">
    <h2>Editar artigo</h2>
    <fieldset>
    <legend>Todos os campos são obrigatórios.</legend>
    <div class="form-group">
      <label for="nome">Nome do artigo</label>
      <input type="text" name="nome" id="nome" class="form-control input-md" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['nome'];?>
" tabindex="1" required>
    </div>
    <div class="form-group">
      <label for="descricao">Descrição</label>
      <input type="text" name="descricao" id="descricao" class="form-control input-md" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['descricao'];?>
" tabindex="2" required>
    </div>
    <div class="form-group">
      <label for="preco">Preco</label>
      <input type="number" name="preco" id="preco" class="form-control input-md" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['preco'];?>
" tabindex="3" required>
    </div>
    <div class="form-group">
      <label for="tipo">Tipo</label>
      <select name="tipo" id="tipo" class="form-control input-md" tabindex="4" required>
        <?php if ($_smarty_tpl->tpl_vars['article']->value['tipo']=='Casaco') {?>
        <option value="Casaco" selected>Casaco</option>
        <?php } else { ?>
        <option value="Casaco">Casaco</option>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['article']->value['tipo']=='Camisola') {?>
        <option value="Camisola" selected>Camisola</option>
        <?php } else { ?>
        <option value="Camisola">Camisola</option>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['article']->value['tipo']=='Calcas') {?>
        <option value="Calcas" selected>Calcas</option>
        <?php } else { ?>
        <option value="Calcas">Calcas</option>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['article']->value['tipo']=='Sapatos') {?>
        <option value="Sapatos" selected>Sapatos</option>
        <?php } else { ?>
        <option value="Sapatos">Sapatos</option>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['article']->value['tipo']=='Acessorio') {?>
        <option value="Acessorio" selected>Acessorio</option>
        <?php } else { ?>
        <option value="Acessorio">Acessorio</option>
        <?php }?>
      </select>
    </div>
    <div class="form-group">
      <label for="genero">Genero</label>
      <select name="genero" id="genero" class="form-control input-md" tabindex="5" required>
        <?php if ($_smarty_tpl->tpl_vars['article']->value['genero']=='Homem') {?>
        <option value="Homem" selected>Homem</option>
        <?php } else { ?>
        <option value="Homem">Homem</option>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['article']->value['genero']=='Mulher') {?>
        <option value="Mulher" selected>Mulher</option>
        <?php } else { ?>
        <option value="Mulher">Mulher</option>
        <?php }?>
      </select>
    </div>
    <div class="form-group">
      <label for="imagem">Imagem</label>
      <input type="file" name="foto" id="foto" accept="image/*" tabindex="6">
    </div>
    <div class="form-group">
      <input type="number" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" hidden>
    </div>
    <div class="row">
        <div class="col-xs-6 col-md-12">
            <input class="btn btn-md btn-block" type="submit" value="Editar">
        </div>
    </div>
  </form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
