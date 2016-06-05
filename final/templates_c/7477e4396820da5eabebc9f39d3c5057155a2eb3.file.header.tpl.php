<?php /* Smarty version Smarty-3.1.15, created on 2016-04-28 11:10:50
         compiled from "/opt/lbaw/lbaw1511/public_html/proto/templates/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:951610876571a443c770b11-67591670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7477e4396820da5eabebc9f39d3c5057155a2eb3' => 
    array (
      0 => '/opt/lbaw/lbaw1511/public_html/proto/templates/common/header.tpl',
      1 => 1461834641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '951610876571a443c770b11-67591670',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_571a443c782734_08964512',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'EMAIL' => 0,
    'ERROR_MESSAGES' => 0,
    'error' => 0,
    'SUCCESS_MESSAGES' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571a443c782734_08964512')) {function content_571a443c782734_08964512($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <base href="https://gnomo.fe.up.pt/~lbaw1511/proto/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>DocMart</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/sandstone/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <link rel="stylesheet" href="templates/css/sweetalert.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/style.css">
  </head>
  <body>
    <?php if ($_smarty_tpl->tpl_vars['EMAIL']->value) {?>
      <?php echo $_smarty_tpl->getSubTemplate ('common/navbarLoggedIn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } else { ?>
      <?php echo $_smarty_tpl->getSubTemplate ('common/navbarLoggedOut.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>

  <div id="error_messages">
    <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
      <div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<a class="close" href=".">X</a></div>
    <?php } ?>
  </div>
  <div id="success_messages">
  <?php  $_smarty_tpl->tpl_vars['success'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['success']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['success']->key => $_smarty_tpl->tpl_vars['success']->value) {
$_smarty_tpl->tpl_vars['success']->_loop = true;
?>
    <div class="success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
<a class="close" href=".">X</a></div>
  <?php } ?>
  </div>
<?php }} ?>
