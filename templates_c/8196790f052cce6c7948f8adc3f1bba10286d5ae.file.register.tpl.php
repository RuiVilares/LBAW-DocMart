<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 04:39:25
         compiled from "/opt/lbaw/lbaw1511/public_html/final/templates/clients/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10956220935741b1d63b2d42-42699978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8196790f052cce6c7948f8adc3f1bba10286d5ae' => 
    array (
      0 => '/opt/lbaw/lbaw1511/public_html/final/templates/clients/register.tpl',
      1 => 1465266998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10956220935741b1d63b2d42-42699978',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5741b1d644ca63_16586267',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5741b1d644ca63_16586267')) {function content_5741b1d644ca63_16586267($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 container">
  <div class="col-sm-2 col-md-2 col-lg-3"></div>
  <div class="col-xs-12 col-sm-8 col-md-8 col-lg-6">
    <form class="form-signin" action="actions/clients/register.php" method="post" enctype="multipart/form-data">
      <h2>
        <a href="#" onclick="return false" class="general" data-toggle="tooltip" title="Para criar uma conta no site deve preencher a informação pedida no formulário em baixo.">
			    <span class="glyphicon glyphicon-info-sign authentication" aria-hidden="true"></span>
			    </a> Registo
      </h2>
      <fieldset>
      <legend>Todos os campos são obrigatórios.</legend>
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control input-md" placeholder="Nome completo" tabindex="1" required>
      </div>
      <div class="form-group">
        <label for="username">Nome de utilizador</label>
        <input type="text" name="username" id="username" class="form-control input-md" placeholder="Nome de utilizador" tabindex="2" required>
      </div>
      <div class="form-group">
        <label for="telemovel">Telemóvel</label>
        <input type="number" name="telemovel" id="telemovel" class="form-control input-md" placeholder="Número de telemóvel" tabindex="3" required>
      </div>
      <div class="form-group">
        <label for="data_de_nascimento">Data de nascimento</label>
        <input type="text" name="data_de_nascimento" id="data_de_nascimento" class="form-control input-md" placeholder="Data de Nascimento (dd/mm/aaaa)" tabindex="4" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control input-md" placeholder="Email" tabindex="5" required>
      </div>
      <div class="form-group">
        <label for="morada">Morada</label>
        <input type="text" name="morada" id="morada" class="form-control input-md" placeholder="Morada completa" tabindex="6" required>
      </div>
      <div class="form-group">
        <label for="contribuinte">Número de contribuinte</label>
        <input type="number" name="contribuinte" id="contribuinte" class="form-control input-md" placeholder="Nº Contribuinte" tabindex="7" required>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control input-md" placeholder="Password" tabindex="8" required>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="form-group">
            <label for="repetirPassword">Password</label>
            <input type="password" name="repetirPassword" id="repetirPassword" class="form-control input-md" placeholder="Repita a Password" tabindex="9" required>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <input type="submit" id="submeter" class="btn btn-md btn-block" value="Registar">
        </div>
        <div class="hidden-xs col-sm-6 col-md-6 col-lg-6">
          <button type="reset" class="btn btn-md btn-block" value="Reset">Limpar</button>
        </div>
      </div>
      </fieldset>
    </form>
    <br>
    <br>
    <br>
  </div>
  <div class="col-sm-2 col-md-2 col-lg-3"></div>
</div>
<script src="javascript/register.js" async></script>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
