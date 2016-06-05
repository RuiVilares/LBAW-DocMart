<?php /* Smarty version Smarty-3.1.15, created on 2016-06-04 22:31:54
         compiled from "/opt/lbaw/lbaw1511/public_html/final/templates/common/navbarAdmin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17467566005741e082b7a2c2-76622152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '727a8c2fff0e743fb63d937960673716e900d13c' => 
    array (
      0 => '/opt/lbaw/lbaw1511/public_html/final/templates/common/navbarAdmin.tpl',
      1 => 1465066115,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17467566005741e082b7a2c2-76622152',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5741e082c00ce6_90984088',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5741e082c00ce6_90984088')) {function content_5741e082c00ce6_90984088($_smarty_tpl) {?><nav class="navbar navbar-default navbar-static-top">
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
						<li><a href="pages/item/shop.php">Coleção</a></li>
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
				<li><a data-toggle="modal" href="#addArticle">Adicionar um artigo</a></li>
				<li><a data-toggle="modal" href="#changePass">Alterar password</a></li>
				<li><a href="actions/authentication/logout.php">Logout</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

<div class="modal fade" id="addArticle" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Adicionar artigo</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <input type="text" name="nome" id="nome" class="form-control input-md" placeholder="Nome do artigo" tabindex="1">
        </div>
				<div class="form-group">
          <input type="text" name="descricao" id="descricao" class="form-control input-md" placeholder="Descricao do artigo" tabindex="2">
        </div>
				<div class="form-group">
          <input type="number" name="preco" id="preco" class="form-control input-md" placeholder="Preço do artigo" tabindex="3">
        </div>
				<div class="form-group">
					<select name="tipo" id="tipo" class="form-control input-md" tabindex="4">
    				<option value="Casaco">Casaco</option>
    				<option value="Camisola">Camisola</option>
    				<option value="Calcas">Calcas</option>
    				<option value="Sapatos">Sapatos</option>
						<option value="Acessorio">Acessorio</option>
  				</select>
        </div>
				<div class="form-group">
					<select name="genero" id="genero" class="form-control input-md" tabindex="5">
    				<option value="Homem">Homem</option>
    				<option value="Mulher">Mulher</option>
  				</select>
        </div>
				<div class="form-group">
					<label id="fotoLabel" class="btn btn-default btn-file form-control">
						Choose a image to upload<input type="file" name="foto" id="foto" accept="image/*" style="display: none;" tabindex="6">
					</label>
        </div>
				<div id="items">
					<button type="button" class="btn btn-sm pull-right btn-info" onclick="addInput()">+</button>
					<div class="form-inline">
						<input type="text" name="cor" id="cor0" class="form-control input-sm" placeholder="Cor">
						<input type="text" name="tamanho" id="tamanho0" class="form-control input-sm" placeholder="Tamanho">
						<input type="number" name="quantidade" id="quantidade0" class="form-control input-sm" placeholder="Quantidade">
        	</div>
				</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success" onclick="addArticle()">Confirmar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

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
<?php }} ?>
