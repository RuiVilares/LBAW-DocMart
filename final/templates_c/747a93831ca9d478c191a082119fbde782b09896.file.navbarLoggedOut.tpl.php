<?php /* Smarty version Smarty-3.1.15, created on 2016-04-28 10:41:46
         compiled from "/opt/lbaw/lbaw1511/public_html/proto/templates/common/navbarLoggedOut.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18461269175721ccca0d6900-70667938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '747a93831ca9d478c191a082119fbde782b09896' => 
    array (
      0 => '/opt/lbaw/lbaw1511/public_html/proto/templates/common/navbarLoggedOut.tpl',
      1 => 1461805816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18461269175721ccca0d6900-70667938',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5721ccca0dc499_94789384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5721ccca0dc499_94789384')) {function content_5721ccca0dc499_94789384($_smarty_tpl) {?><nav class="navbar navbar-default navbar-static-top">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="">DocMart</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><a href="">Novidades<span class="sr-only">(current)</span></a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mulher<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="pages/item/shop.php">Casacos</a></li>
						<li><a href="pages/item/shop.php">Camisolas</a></li>
						<li><a href="pages/item/shop.php">Calças</a></li>
						<li><a href="pages/item/shop.php">Sapatos</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="pages/item/shop.php">Coleção</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Homem<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="pages/item/shop.php">Casacos</a></li>
						<li><a href="pages/item/shop.php">Camisolas</a></li>
						<li><a href="pages/item/shop.php">Calças</a></li>
						<li><a href="pages/item/shop.php">Sapatos</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Coleção</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Acessórios<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="pages/item/shop.php">Homem</a></li>
						<li><a href="pages/item/shop.php">Mulher</a></li>
					</ul>
				</li>
				<li>
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Pesquisar">
					</div>
					<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
				</form>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="pages/authentication/login.php">Autenticação</a></li>
				<li><a href="pages/clients/register.php">Registo</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Carrinho<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="pages/cartShopping/scart.php">Ver compras</a></li>
						<li><a href="pages/cartShopping/buy.php">Finalizar compra</a></li>
						<li role="separator" class="divider"></li>
						<li>Total: €31.53</li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
<?php }} ?>
