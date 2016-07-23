<?php /* Smarty version Smarty-3.1.15, created on 2016-06-05 23:14:00
         compiled from "/opt/lbaw/lbaw1511/public_html/final/templates/info/contacts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16877642135741ab716af195-54801243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8cf8d59dfbf2174f4713c29f57ddfcfc69eb627' => 
    array (
      0 => '/opt/lbaw/lbaw1511/public_html/final/templates/info/contacts.tpl',
      1 => 1465161218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16877642135741ab716af195-54801243',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5741ab71749581_56226078',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5741ab71749581_56226078')) {function content_5741ab71749581_56226078($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="well well-sm">
                <form class="form-horizontal" name="contactsForm" method="post" action="actions/contacts/mail.php">
                    <fieldset>
                        <legend class="text-center header">Contacta-nos</legend>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="fname" name="fname" type="text" placeholder="Primeiro Nome" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="lname" name="lname" type="text" placeholder="Ultimo Nome" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" name="email" type="text" placeholder="Endereço de Email" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="phone" name="phone" type="text" placeholder="Telemóvel" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <textarea class="form-control" id="message" name="message" placeholder="Introduza aqui a sua mensagem." rows="7" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button id="send-contact" type="submit" class="btn btn-md">Enviar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <div class="panel panel-default">
                    <br>
                    <fieldset>
                    <legend class="text-center header">Contactos</legend>
                    <div class="panel-body text-center">
                        <h4>Morada</h4>
                        <div>
                        Rua das Camélias, 1084<br/>
                        Paranhos, Porto<br />
                        4200-125<br />
                        Portugal<br />
                        </div>
                    </div>
                    <div class="panel-body text-center">
                        <h4>Telefone</h4>
                        <div>
                        Geral: 225916498<br/>
                        Encomendas Online: 225916499<br />
                        </div>
                    </div>
                    <div class="panel-body text-center">
                        <h4>Emails</h4>
                        <div>
                        geral@docmart.com<br/>
                        comercial@docmart.com<br />
                        </div>
                    </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="javascript/contacts.js" async></script>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
