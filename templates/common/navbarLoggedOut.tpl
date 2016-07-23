<nav class="navbar navbar-default navbar-static-top">
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
				<li><a href="#" onclick="return false" class="butDownRight hidden-sm hidden-xs" data-toggle="tooltip" title="Nestes dois botões pode
autenticar-se ou registar-se no site.">
				 	<span class="glyphicon glyphicon-info-sign bar" aria-hidden="true"></span></a>
				</li>
				<li><a href="pages/authentication/login.php">Autenticação</a></li>
				<li><a href="pages/clients/register.php">Registo</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
