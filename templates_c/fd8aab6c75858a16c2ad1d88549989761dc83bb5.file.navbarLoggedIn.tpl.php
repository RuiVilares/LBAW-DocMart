<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 01:22:26
         compiled from "/opt/lbaw/lbaw1511/public_html/final/templates/common/navbarLoggedIn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12686356145741b087e80ce5-55812628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd8aab6c75858a16c2ad1d88549989761dc83bb5' => 
    array (
      0 => '/opt/lbaw/lbaw1511/public_html/final/templates/common/navbarLoggedIn.tpl',
      1 => 1465254993,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12686356145741b087e80ce5-55812628',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5741b087f09798_64341250',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5741b087f09798_64341250')) {function content_5741b087f09798_64341250($_smarty_tpl) {?><nav class="navbar navbar-default navbar-static-top">
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
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Homem<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="pages/item/shop.php?genre=Homem&type=Casaco">Casacos</a></li>
						<li><a href="pages/item/shop.php?genre=Homem&type=Camisola">Camisolas</a></li>
						<li><a href="pages/item/shop.php?genre=Homem&type=Calcas">Calças</a></li>
						<li><a href="pages/item/shop.php?genre=Homem&type=Sapatos">Sapatos</a></li>
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
				<li>
				<a href="#" onclick="return false" class="butDownLeft hidden-sm hidden-xs" data-toggle="tooltip" title="Nos botões à esquerda pode visualizar os catálogos de cada categoria
e na barra pode pesquisar qualquer artigo que deseje.">
					<span class="glyphicon glyphicon-info-sign bar" aria-hidden="true"></span>
				</a>
			</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" onclick="return false" class="butDownRight hidden-sm hidden-xs" data-toggle="tooltip" title="Nos botões à direita pode visualizar o seu perfil, os seus
favoritos, o seu carrinho ou pode finalizar a sessão.">
					<span class="glyphicon glyphicon-info-sign bar" aria-hidden="true"></span>
				</a></li>
				<li><a href="pages/clients/profile.php">O meu perfil</a></li>
				<li><a href="pages/commentClassFav/favorites.php">Favoritos</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Carrinho<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="pages/cartShopping/scart.php">Ver compras</a></li>
						<li><a href="pages/cartShopping/buy.php">Finalizar compra</a></li>
						<li><a href="pages/cartShopping/history.php">Histórico de compras</a></li>
						<li role="separator" class="divider"></li>
						<li id="carrinhoTotal" data-onload="carrinhoTotal()"></li>
					</ul>
				</li>
				<li><a href="actions/authentication/logout.php">Logout</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
<?php }} ?>
