<?php /* Smarty version Smarty-3.1.15, created on 2016-04-28 20:57:18
         compiled from "/opt/lbaw/lbaw1511/public_html/proto/templates/clients/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1866331173571a443c6cd591-54751163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd63a2ca395fc47a5254aa9573fca75c9db48a5c1' => 
    array (
      0 => '/opt/lbaw/lbaw1511/public_html/proto/templates/clients/register.tpl',
      1 => 1461869443,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1866331173571a443c6cd591-54751163',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_571a443c76a9a3_20742880',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571a443c76a9a3_20742880')) {function content_571a443c76a9a3_20742880($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="container" style="padding-top:0.5%; padding-bottom:5%; width:80%">
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      <form class="form-signin" action="actions/clients/register.php" method="post" enctype="multipart/form-data">
        <h2>Registo</h2>
        <hr/>
        <div class="form-group">
          <input type="text" name="nome" id="nome" class="form-control input-md" placeholder="Nome completo" tabindex="1">
        </div>
        <div class="form-group">
          <input type="text" name="username" id="username" class="form-control input-md" placeholder="Nome de utilizador" tabindex="2">
        </div>
        <div class="form-group">
          <input type="text" name="telefone" id="telefone" class="form-control input-md" placeholder="Número de telemóvel" tabindex="3">
        </div>
        <div class="form-group">
          <input type="email" name="email" id="email" class="form-control input-md" placeholder="Email" tabindex="4">
        </div>
        <div class="form-group">
          <input type="morada" name="morada" id="morada" class="form-control input-md" placeholder="Morada completa" tabindex="5">
        </div>
        <div class="form-group">
          <input type="Contribuinte" name="contribuinte" id="contribuinte" class="form-control input-md" placeholder="Nº Contribuinte" tabindex="6">
        </div>
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
              <input type="password" name="password" id="password" class="form-control input-md" placeholder="Password" tabindex="7">
            </div>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
              <input type="password" name="repetirPassword" id="repetirPassword" class="form-control input-md" placeholder="Repita a Password" tabindex="8">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-6 col-md-6">
            <input class="btn btn-md btn-block" type="submit" value="Registar">
          </div>
          <div class="col-xs-6 col-md-6">
            <a href="." class="btn btn-block btn-md">Cancelar</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
