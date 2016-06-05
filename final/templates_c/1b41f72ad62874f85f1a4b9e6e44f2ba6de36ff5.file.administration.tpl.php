<?php /* Smarty version Smarty-3.1.15, created on 2016-04-22 18:32:48
         compiled from "/opt/lbaw/lbaw1511/public_html/proto/templates/clients/administration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2141343648571a5230e6c3b2-17464523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b41f72ad62874f85f1a4b9e6e44f2ba6de36ff5' => 
    array (
      0 => '/opt/lbaw/lbaw1511/public_html/proto/templates/clients/administration.tpl',
      1 => 1461342721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2141343648571a5230e6c3b2-17464523',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_571a5230f178b7_18548702',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571a5230f178b7_18548702')) {function content_571a5230f178b7_18548702($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-10 col-md-offset-1">
      <table class="table">
        <thead class="thead-default">
          <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Utilizador</th>
            <th>Email</th>
            <th>Nr de compras</th>
            <th>Nr de avaliações</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>António Ramadas</td>
            <td>toze</td>
            <td>toze@gmail.com</td>
            <td>5</td>
            <td>1</td>
            <td><button class="btn btn-danger">Bloquear</button></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Filipa Ramos</td>
            <td>filipinhafofa</td>
            <td>filipinhafofa@gmail.com</td>
            <td>1</td>
            <td>1</td>
            <td><button class="btn btn-danger">Bloquear</button></td>
          </tr>
          <tr class="danger">
            <th scope="row">3</th>
            <td>José Teles</td>
            <td>zepedro</td>
            <td>zepedro@gmail.com</td>
            <td>1</td>
            <td>1</td>
            <td><button class="btn btn-success">Desbloquear</button></td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Rui Vilares</td>
            <td>vilares</td>
            <td>vilares@gmail.com</td>
            <td>12</td>
            <td>5</td>
            <td><button class="btn btn-danger">Bloquear</button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
