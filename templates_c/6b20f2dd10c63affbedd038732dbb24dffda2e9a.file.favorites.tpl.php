<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 00:22:53
         compiled from "/opt/lbaw/lbaw1511/public_html/final/templates/commentClassFav/favorites.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200012163457515e6c84f6c2-65466175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b20f2dd10c63affbedd038732dbb24dffda2e9a' => 
    array (
      0 => '/opt/lbaw/lbaw1511/public_html/final/templates/commentClassFav/favorites.tpl',
      1 => 1465251768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200012163457515e6c84f6c2-65466175',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57515e6c9066f1_56500710',
  'variables' => 
  array (
    'favorites' => 0,
    'favorite' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57515e6c9066f1_56500710')) {function content_57515e6c9066f1_56500710($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- Page Content -->
<div class="container">
    <div class="row">
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
                <?php if (empty($_smarty_tpl->tpl_vars['favorites']->value)) {?>
                <tr>
                  <td><h4>Não existem produtos nos favoritos</h4></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <?php } else { ?>
                  <?php  $_smarty_tpl->tpl_vars['favorite'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['favorite']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['favorites']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['favorite']->key => $_smarty_tpl->tpl_vars['favorite']->value) {
$_smarty_tpl->tpl_vars['favorite']->_loop = true;
?>
                    <tr>
                      <td class="col-sm-8 col-md-6">
                        <div class="media">
                          <a class="thumbnail pull-left" href="#" style="margin-right: 2%">
                            <!-- TODO $favorite.caminho da fotografia -->
                            <img class="media-object" alt="<?php echo $_smarty_tpl->tpl_vars['favorite']->value['nome'];?>
" src="./img/<?php echo $_smarty_tpl->tpl_vars['favorite']->value['caminho_da_fotografia'];?>
" style="width: 72px; height: 72px;">
                          </a>
                          <div class="media-body">
                            <h4 class="media-heading"><a href="pages/item/item.php?id=<?php echo $_smarty_tpl->tpl_vars['favorite']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['favorite']->value['nome'];?>
</a></h4>
                          </div>
                        </div>
                      </td>
                      <td></td>
                      <td></td>
                      <td class="col-sm-1 col-md-1 text-center">
                        <strong>€<?php echo $_smarty_tpl->tpl_vars['favorite']->value['preco'];?>
</strong>
                      </td>
                      <td class="col-sm-1 col-md-1">
                        <button type="button" class="btn btn-danger" onclick="removeFavorite(<?php echo $_smarty_tpl->tpl_vars['favorite']->value['id'];?>
)">
                            <span class="glyphicon glyphicon-remove"></span> Remover
                        </button>
                      </td>
                    </tr>
                  <?php } ?>
                <?php }?>
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
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
