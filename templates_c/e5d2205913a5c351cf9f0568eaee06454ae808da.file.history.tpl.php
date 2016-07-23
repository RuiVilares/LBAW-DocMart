<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 03:53:12
         compiled from "/opt/lbaw/lbaw1511/public_html/final/templates/cartShopping/history.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6569540105752ad2764a697-34200354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5d2205913a5c351cf9f0568eaee06454ae808da' => 
    array (
      0 => '/opt/lbaw/lbaw1511/public_html/final/templates/cartShopping/history.tpl',
      1 => 1465263784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6569540105752ad2764a697-34200354',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5752ad27697404_53499944',
  'variables' => 
  array (
    'arts' => 0,
    'art' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5752ad27697404_53499944')) {function content_5752ad27697404_53499944($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- Page Content -->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 container">
  <div class="col-md-1 col-lg-2"></div>
  <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8">
    <h2>
      <a href="#" onclick="return false" class="favorites" data-toggle="tooltip" title="No histórico de compras pode encontrar todos os artigos que já adquiriu.">
      <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
      </a>Histórico de compras
    </h2>
    <br>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Producto</th>
          <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center">Quantidade</th>
          <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center">Preço</th>
          <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center">Total</th>
          <th class="hidden-xs col-sm-2 col-md-2 col-lg-2 text-center">Data</th>
        </tr>
      </thead>
      <tbody>
        <?php if (empty($_smarty_tpl->tpl_vars['arts']->value)) {?>
        <tr>
          <td><h4>Não existem compras concretizadas</h4></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <?php } else { ?>
        <?php  $_smarty_tpl->tpl_vars['art'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['art']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['art']->key => $_smarty_tpl->tpl_vars['art']->value) {
$_smarty_tpl->tpl_vars['art']->_loop = true;
?>
        <tr>
          <td>
            <div class="media">
              <a class="thumbnail pull-left" href="pages/item/item.php?id=<?php echo $_smarty_tpl->tpl_vars['art']->value['id'];?>
" style="margin-right: 2%"> <img class="media-object" src="./img/<?php echo $_smarty_tpl->tpl_vars['art']->value['caminho_da_fotografia'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['art']->value['nome'];?>
" style="width: 72px; height: 72px;"> </a>
              <div class="media-body">
                <h4 class="media-heading">
                  <a href="pages/item/item.php?id=<?php echo $_smarty_tpl->tpl_vars['art']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['art']->value['nome'];?>
</a>
                </h4>
                <h5 class="media-heading">Tamanho: <?php echo $_smarty_tpl->tpl_vars['art']->value['tamanho'];?>
</h5>
                <h5 class="media-heading">Cor: <?php echo $_smarty_tpl->tpl_vars['art']->value['cor'];?>
</h5>
              </div>
            </div>
          </td>
          <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center"><strong><?php echo $_smarty_tpl->tpl_vars['art']->value['quantidade'];?>
</strong></td>
          <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center"><strong>€<?php echo $_smarty_tpl->tpl_vars['art']->value['preco'];?>
</strong></td>
          <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center"><strong>€<?php echo $_smarty_tpl->tpl_vars['art']->value['preco']*$_smarty_tpl->tpl_vars['art']->value['quantidade'];?>
</strong></td>
          <td class="hidden-xs col-sm-2 col-md-2 col-lg-2 text-center"><strong><?php echo $_smarty_tpl->tpl_vars['art']->value['data'];?>
</strong></td>
        </tr>
        <?php } ?>
        <?php }?>
        <tr>
          <td>
            <a class="btn btn-default" href="." role="button">Voltar</a>
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="col-md-1 col-lg-2"></div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
