<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 03:57:16
         compiled from "/opt/lbaw/lbaw1511/public_html/final/templates/clients/administration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:445883648573f227227cb67-08542824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5b354835841366d3305cfb9416117e455b4d73b' => 
    array (
      0 => '/opt/lbaw/lbaw1511/public_html/final/templates/clients/administration.tpl',
      1 => 1465264618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '445883648573f227227cb67-08542824',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_573f227238ea72_73635089',
  'variables' => 
  array (
    'clients' => 0,
    'client' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573f227238ea72_73635089')) {function content_573f227238ea72_73635089($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 container">
  <div class="col-sm-1 col-md-1 col-lg-1"></div>
  <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
    <table class="table">
      <thead class="thead-default">
        <tr>
          <th>#</th>
          <th>Nome</th>
          <th>Utilizador</th>
          <th>Email</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clients']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['client']->value['desativado']=='true') {?>
        <tr class="danger">
        <?php } else { ?>
        <tr>
        <?php }?>
          <th scope="row"><?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
</th>
          <td><?php echo $_smarty_tpl->tpl_vars['client']->value['nome'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['client']->value['username'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['client']->value['email'];?>
</td>
          <?php if ($_smarty_tpl->tpl_vars['client']->value['desativado']=='true') {?>
          <td><button class="btn btn-success btn-block" onclick="lock(<?php echo $_smarty_tpl->tpl_vars['client']->value['id_cliente'];?>
, 'false')">Desbloquear</button></td>
          <?php } else { ?>
          <td><button class="btn btn-danger btn-block" onclick="lock(<?php echo $_smarty_tpl->tpl_vars['client']->value['id_cliente'];?>
, 'true')">Bloquear</button></td>
          <?php }?>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    </div>
  <div class="col-sm-1 col-md-1 col-lg-1"></div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
