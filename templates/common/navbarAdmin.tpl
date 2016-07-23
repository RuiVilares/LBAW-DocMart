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
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="pages/clients/administration.php">Administração de clientes</a></li>
				<li><a href="pages/item/addArticle.php">Adicionar um artigo</a></li>
				<li><a data-toggle="modal" href="#changePass">Alterar password</a></li>
				<li><a href="actions/authentication/logout.php">Logout</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

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
