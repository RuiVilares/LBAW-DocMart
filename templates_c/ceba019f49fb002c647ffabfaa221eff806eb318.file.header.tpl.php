<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 02:26:47
         compiled from "/opt/lbaw/lbaw1511/public_html/final/templates/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:285342501573f2272397dc9-14661311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ceba019f49fb002c647ffabfaa221eff806eb318' => 
    array (
      0 => '/opt/lbaw/lbaw1511/public_html/final/templates/common/header.tpl',
      1 => 1465259202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '285342501573f2272397dc9-14661311',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_573f22723e3722_66042205',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'EMAIL' => 0,
    'ADMIN' => 0,
    'ERROR_MESSAGES' => 0,
    'error' => 0,
    'SUCCESS_MESSAGES' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573f22723e3722_66042205')) {function content_573f22723e3722_66042205($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-PT">
  <head>
    <base href="https://gnomo.fe.up.pt/~lbaw1511/final/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DocMart</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/sandstone/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <script src="javascript/sweetalert.min.js"></script>
    <link rel="stylesheet" href="css/sweetalert.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/style.css">
  </head>
  <body>
  <?php if ($_smarty_tpl->tpl_vars['EMAIL']->value) {?>
  <?php if ($_smarty_tpl->tpl_vars['ADMIN']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ('common/navbarAdmin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ('common/navbarLoggedIn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php }?>
  <?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ('common/navbarLoggedOut.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php }?>

  <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
    <script>
      swal("Erro", "<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
", "error");
    </script>
  <?php } ?>

  <?php  $_smarty_tpl->tpl_vars['success'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['success']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['success']->key => $_smarty_tpl->tpl_vars['success']->value) {
$_smarty_tpl->tpl_vars['success']->_loop = true;
?>
    <script>
      swal("Sucesso", "<?php echo $_smarty_tpl->tpl_vars['success']->value;?>
", "success");
    </script>
  <?php } ?>
<?php }} ?>
