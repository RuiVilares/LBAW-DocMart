<?php /* Smarty version Smarty-3.1.15, created on 2016-04-22 18:30:27
         compiled from "/opt/lbaw/lbaw1511/public_html/proto/templates/clients/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1337171638571a50b95d8981-76092957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '421a9b1e0360aff671bb71ba5a52d7de0e821136' => 
    array (
      0 => '/opt/lbaw/lbaw1511/public_html/proto/templates/clients/profile.tpl',
      1 => 1461342466,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1337171638571a50b95d8981-76092957',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_571a50b96605e8_64252444',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571a50b96605e8_64252444')) {function content_571a50b96605e8_64252444($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="container" style='padding-top:50px'>
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6">
      <div class="well well-sm">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <img id="profImg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/2000px-User_icon_2.svg.png" alt="" style="width:100%" class="img-rounded img-responsive"/>
          </div>
          <div class="col-sm-6 col-md-8">
            <h4>Paulo Filipe Moreira Costa</h4>
            <p>
              <i class="glyphicon glyphicon-copy"></i>
              555558889
            </p>
            <p>
              <i class="glyphicon glyphicon-home"></i>
              Rua da Tulipas Cor-de-rosa, Cedofeita, 4200-542 Porto
            </p>
            <p>
              <i class="glyphicon glyphicon-earphone"></i>
              Telefone
            </p>
            <p>
              <i class="glyphicon glyphicon-envelope"></i>
              paulo@gmail.com
            </p>
            <p>
              <i class="glyphicon glyphicon-gift"></i>
              01/12/1992
            </p>
            <!-- Split button -->
          </div>
        </div>
      </div>
      <a href="#" class="btn btn-default">Editar dados</a>
      <a href="#" class="btn btn-default">Alterar password</a>
      <button class="btn btn-default pull-right">Voltar</button>
    </div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
