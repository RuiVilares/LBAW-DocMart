<?php /* Smarty version Smarty-3.1.15, created on 2016-06-04 20:49:40
         compiled from "/opt/lbaw/lbaw1511/public_html/final/templates/common/navbarLoggedOut.tpl" */ ?>
<?php /*%%SmartyHeaderCode:230032870573f22723e9ac6-58577070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf23ed1f4f7075e2dc017556abe1bf4a7d96ee88' => 
    array (
      0 => '/opt/lbaw/lbaw1511/public_html/final/templates/common/navbarLoggedOut.tpl',
      1 => 1465066137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '230032870573f22723e9ac6-58577070',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_573f22723ef359_24604030',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573f22723ef359_24604030')) {function content_573f22723ef359_24604030($_smarty_tpl) {?><nav class="navbar navbar-default navbar-static-top">
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
						<li><a href="pages/item/shop.php?genre=Mulher&type=Casaco">Casacos</a></li>
						<li><a href="pages/item/shop.php?genre=Mulher&type=Camisola">Camisolas</a></li>
						<li><a href="pages/item/shop.php?genre=Mulher&type=Calcas">Calças</a></li>
						<li><a href="pages/item/shop.php?genre=Mulher&type=Sapatos">Sapatos</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="pages/item/shop.php">Coleção</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Homem<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="pages/item/shop.php?genre=Homem&type=Casaco">Casacos</a></li>
						<li><a href="pages/item/shop.php?genre=Homem&type=Camisola">Camisolas</a></li>
						<li><a href="pages/item/shop.php?genre=Homem&type=Calcas">Calças</a></li>
						<li><a href="pages/item/shop.php?genre=Homem&type=Sapatos">Sapatos</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Coleção</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Acessórios<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="pages/item/shop.php?genre=Homem&type=Acessorio">Homem</a></li>
						<li><a href="pages/item/shop.php?genre=Mulher&type=Acessorio">Mulher</a></li>
					</ul>
				</li>
				<li>
				<form class="navbar-form navbar-left" action="actions/item/search.php" role="search" method="get">
					<div class="form-group">
						<input type="text" name="search" class="form-control"  placeholder="Pesquisar">
					</div>
					<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
				</form>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="pages/authentication/login.php">Autenticação</a></li>
				<li><a href="pages/clients/register.php">Registo</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
<?php }} ?>
