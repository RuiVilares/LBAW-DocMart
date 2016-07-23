<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 03:52:37
         compiled from "/opt/lbaw/lbaw1511/public_html/final/templates/cartShopping/buy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7152847355751a7e12b3648-93150150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0418946779193901025d6062f5480c11bbce626' => 
    array (
      0 => '/opt/lbaw/lbaw1511/public_html/final/templates/cartShopping/buy.tpl',
      1 => 1465263757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7152847355751a7e12b3648-93150150',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5751a7e1348d82_41086853',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5751a7e1348d82_41086853')) {function content_5751a7e1348d82_41086853($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- Page Content -->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 container">
  <div class='col-sm-2 col-md-2 col-lg-4'></div>
  <div class='col-xs-12 col-sm-8 col-md-8 col-lg-4'>
    <div class='row'>
      <div class='col-xs-12 form-group'>
        <label class='control-label'>Nome no Cartão</label>
        <input id="cardName" class='form-control' size='4' type='text' required>
      </div>
    </div>
    <div class='row'>
      <div class='col-xs-12 form-group'>
        <label class='control-label'>Número de Cartão</label>
        <input id="cardNumber" autocomplete='off' class='form-control card-number' size='20' type='text' required>
      </div>
    </div>
    <div class='row'>
      <div class='col-xs-12 col-sm-6 col-md-4 col-lg-4 form-group'>
        <label class='control-label'>CVC</label>
        <input id="CVC" autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text' required>
      </div>
      <div class='col-xs-12 col-sm-6 col-md-4 col-lg-4 form-group'>
        <label class='control-label'>Válido até</label>
        <input id="expirationMonth" class='form-control card-expiry-month' placeholder='MM' size='2' type='text' required>
      </div>
      <div class='col-xs-12 col-sm-6 col-md-4 col-lg-4 form-group'>
        <label class='control-label'> </label>
        <input id="expirationYear" class='form-control card-expiry-year' placeholder='AAAA' size='4' type='text' required>
      </div>
    </div>
    <div class='row'>
      <div class='col-xs-12 form-group'>
        <div id="buyTotal" data-onload="buyTotal()" class='form-control total btn btn-info'></div>
      </div>
    </div>
    <div class='row'>
      <div class='col-xs-12 form-group'>
        <button class='form-control btn btn-default submit-button' onclick="buy()">Pagamento</button>
      </div>
    </div>
  </div>
  <div class='col-sm-2 col-md-2 col-lg-4'></div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
