<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 04:43:11
         compiled from "/opt/lbaw/lbaw1511/public_html/final/templates/clients/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17898792585741b2dc8f3579-08716776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6e75cb46342bf607d647986fed13f5e4f104c0d' => 
    array (
      0 => '/opt/lbaw/lbaw1511/public_html/final/templates/clients/profile.tpl',
      1 => 1465267364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17898792585741b2dc8f3579-08716776',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5741b2dc9e6284_10276256',
  'variables' => 
  array (
    'client' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5741b2dc9e6284_10276256')) {function content_5741b2dc9e6284_10276256($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 container">
  <div class="col-xs-1 col-sm-2 col-md-3 col-lg-3"></div>
  <div class="col-xs-10 col-sm-8 col-md-6 col-lg-6">
    <div class="row  well well-sm">
      <div class="hidden-xs col-sm-4 col-md-4 col-lg-4">
        <img id="profImg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/2000px-User_icon_2.svg.png" alt="" style="width:100%" class="img-rounded img-responsive"/>
      </div>
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        <h4><?php echo $_smarty_tpl->tpl_vars['client']->value['nome'];?>
</h4>
        <p><i class="glyphicon glyphicon-copy"></i><?php echo $_smarty_tpl->tpl_vars['client']->value['contribuinte'];?>
</p>
        <p><i class="glyphicon glyphicon-home"></i><?php echo $_smarty_tpl->tpl_vars['client']->value['morada'];?>
</p>
        <p><i class="glyphicon glyphicon-earphone"></i><?php echo $_smarty_tpl->tpl_vars['client']->value['telefone'];?>
</p>
        <p><i class="glyphicon glyphicon-envelope"></i><?php echo $_smarty_tpl->tpl_vars['client']->value['email'];?>
</p>
        <p><i class="glyphicon glyphicon-gift"></i><?php echo $_smarty_tpl->tpl_vars['client']->value['data_de_nascimento'];?>
</p>
      </div>
    </div>
    <div class="row">
      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#changeInfo">Editar dados</button>
      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#changePass">Alterar password</button>
      <a href="#" onclick="return false" class="profile" data-toggle="tooltip" title="Aqui pode editar os dados do seu perfil ou alterar a sua password. Se deseja voltar ao site basta clicar no botão Voltar.">
        <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
      </a>
      <a href="." class="btn btn-default pull-right">Voltar</a>
    </div>
  </div>
  <div class="col-xs-1 col-sm-2 col-md-3 col-lg-3"></div>
</div>

<div class="modal fade" id="changeInfo" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Editar dados</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          Name: <input type="text" name="nome" id="nome" class="form-control input-md" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['nome'];?>
" tabindex="1">
        </div>
        <div class="form-group">
          Username: <input type="text" name="username" id="username" class="form-control input-md" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['username'];?>
" tabindex="2">
        </div>
        <div class="form-group">
          Telemovel: <input type="number" name="telemovel" id="telemovel" class="form-control input-md" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['telefone'];?>
" tabindex="3">
        </div>
        <div class="form-group">
          Data de nascimento: <input type="text" name="data_de_nascimento" id="data_de_nascimento" class="form-control input-md" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['data_de_nascimento'];?>
" tabindex="4">
        </div>
        <div class="form-group">
          Email: <input type="email" name="email" id="email" class="form-control input-md" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['email'];?>
" tabindex="5">
        </div>
        <div class="form-group">
          Morada: <input type="text" name="morada" id="morada" class="form-control input-md" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['morada'];?>
" tabindex="6">
        </div>
        <div class="form-group">
          Contribuinte: <input type="number" name="contribuinte" id="contribuinte" class="form-control input-md" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['contribuinte'];?>
" tabindex="7">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success" onclick="changeInfo()">Confirmar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="changePass" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Alterar password</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <input type="password" name="oldPassword" id="oldPassword" class="form-control input-md" placeholder="Password atual" tabindex="1">
        </div>
        <div class="form-group">
          <input type="password" name="newPassword" id="newPassword" class="form-control input-md" placeholder="Nova password" tabindex="2">
        </div>
        <div class="form-group">
          <input type="password" name="password" id="repeatPassword" class="form-control input-md" placeholder="Repetir nova password" tabindex="3">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success" onclick="changePassword()">Confirmar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
