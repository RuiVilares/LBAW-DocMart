<?php /* Smarty version Smarty-3.1.15, created on 2016-04-28 20:57:27
         compiled from "/opt/lbaw/lbaw1511/public_html/proto/templates/authentication/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1753830119571a501ae0f5f0-94097080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28e5a9dd116bb5decdb256a7fe62909d679ee0a5' => 
    array (
      0 => '/opt/lbaw/lbaw1511/public_html/proto/templates/authentication/login.tpl',
      1 => 1461869751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1753830119571a501ae0f5f0-94097080',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_571a501ae971b4_58758146',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571a501ae971b4_58758146')) {function content_571a501ae971b4_58758146($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
            <a href="page/clients/register.php">Registo</a>|<a href="#">Recuperar Password</a> 
        </center>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
