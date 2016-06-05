<?php /* Smarty version Smarty-3.1.15, created on 2016-05-22 19:20:47
         compiled from "/opt/lbaw/lbaw1511/public_html/final/templates/authentication/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6841290945741b033aa1802-34647121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4b32d041cbce3e93a1e958002f146732f4ba74f' => 
    array (
      0 => '/opt/lbaw/lbaw1511/public_html/final/templates/authentication/login.tpl',
      1 => 1463937636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6841290945741b033aa1802-34647121',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5741b033b44906_98878994',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5741b033b44906_98878994')) {function content_5741b033b44906_98878994($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="container" style="padding-top:5%; width:25%">
  <form class="form-signin" action="actions/authentication/login.php" method="post" enctype="multipart/form-data">
    <h2 class="form-signin-heading">Autenticação</h2>
    <hr/>
    <div class="form-group">
        <input type="text" name="email" id="loginEmail" class="form-control input-md" placeholder="Email" tabindex="1">
    </div>
    <div class="form-group">
        <input type="password" name="password" id="loginPassword" class="form-control input-md" placeholder="Password" tabindex="2">
    </div>
    <div class="row">
        <div class="col-xs-6 col-md-12">
            <input class="btn btn-md btn-block" type="submit" value="Login">
        </div>
    </div>
    </form>
    <hr/>
    <div class="row" id="loginLinks">
        <center>
            <a href="pages/clients/register.php">Registo</a>|<a data-toggle="modal" href="#passRecovery">Recuperar Password</a>
        </center>
    </div>
</div>


<div class="modal fade" id="passRecovery" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Recuperar password</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <input type="email" name="email" id="email" class="form-control input-md" placeholder="Email" tabindex="1">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success" onclick="passRecovery()">Confirmar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
