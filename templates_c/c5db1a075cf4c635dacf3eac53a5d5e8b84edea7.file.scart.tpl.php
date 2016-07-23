<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 03:52:17
         compiled from "/opt/lbaw/lbaw1511/public_html/final/templates/cartShopping/scart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1777252435575198eaa82e79-15416558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5db1a075cf4c635dacf3eac53a5d5e8b84edea7' => 
    array (
      0 => '/opt/lbaw/lbaw1511/public_html/final/templates/cartShopping/scart.tpl',
      1 => 1465263801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1777252435575198eaa82e79-15416558',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_575198eaad4ab0_33501693',
  'variables' => 
  array (
    'arts' => 0,
    'art' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575198eaad4ab0_33501693')) {function content_575198eaad4ab0_33501693($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- Page Content -->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 container">
  <div class="col-md-1 col-lg-2"></div>
  <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Producto</th>
          <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center">Quantidade</th>
          <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center">Preço</th>
          <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center">Total</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php if (empty($_smarty_tpl->tpl_vars['arts']->value)) {?>
        <tr>
          <td><h4>Não existem produtos no carrinho</h4></td>
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
" style="margin-right: 2%">
                <img class="media-object" src="./img/<?php echo $_smarty_tpl->tpl_vars['art']->value['caminho_da_fotografia'];?>
" style="width: 72px; height: 72px;">
              </a>
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
          <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1"><strong><?php echo $_smarty_tpl->tpl_vars['art']->value['quantidade'];?>
</strong></td>
          <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center"><strong>€<?php echo $_smarty_tpl->tpl_vars['art']->value['preco'];?>
</strong></td>
          <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center"><strong>€<?php echo $_smarty_tpl->tpl_vars['art']->value['preco']*$_smarty_tpl->tpl_vars['art']->value['quantidade'];?>
</strong></td>
          <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center">
            <button type="button" class="btn btn-danger" onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['art']->value['id'];?>
, '<?php echo $_smarty_tpl->tpl_vars['art']->value['tamanho'];?>
', '<?php echo $_smarty_tpl->tpl_vars['art']->value['cor'];?>
')">
              <span class="glyphicon glyphicon-remove"></span> Remover
            </button>
          </td>
        </tr>
        <?php } ?>
        <?php }?>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td><h3>Total</h3></td>
          <td id="totalCart" data-onload="getTotal()" class="text-right"></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td>
            <a class="btn btn-default" href=".">
              <span class="glyphicon glyphicon-shopping-cart"></span> Continuar compras
            </a>
          </td>
          <td>
            <a class="btn btn-success" href="pages/cartShopping/buy.php">
              Finalizar compras <span class="glyphicon glyphicon-play"></span>
            </a>
          </td>
        </tr>
      </tbody>
    </table>
    <br>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
