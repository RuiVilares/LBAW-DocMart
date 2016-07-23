{include file='common/header.tpl'}
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 container">
  <div class="col-sm-2 col-md-2 col-lg-4"></div>
  <div class="col-sm-8 col-md-8 col-lg-4">
    <form class="form-signin" action="actions/authentication/login.php" method="post" enctype="multipart/form-data">
      <h2>
        <a href="#" onclick="return false" class="general" data-toggle="tooltip" title="Aqui pode fazer login se já tiver uma conta, basta preencher o formulário com o seu email e password.">
          <span class="glyphicon glyphicon-info-sign authentication" aria-hidden="true"></span>
        </a>Autenticação
      </h2>
      <fieldset>
      <legend>Todos os campos são obrigatórios.</legend>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" id="loginEmail" class="form-control input-md" placeholder="Email" tabindex="1" required>
      </div>
      <div class="form-group">
        <label for="loginPassword">Password</label>
        <input type="password" name="password" id="loginPassword" class="form-control input-md" placeholder="Password" tabindex="2" required>
      </div>
      <div class="row">
        <div class="col-xs-6 col-md-12">
          <input class="btn btn-md btn-block" type="submit" value="Login">
        </div>
      </div>
      </fieldset>
    </form>
    <hr>
    <div class="row text-center" id="loginLinks">
      <a href="pages/clients/register.php">Registo</a>|<a data-toggle="modal" href="#passRecovery">Recuperar Password</a>
    </div>
  </div>
  <div class="col-sm-2 col-md-2 col-lg-4"></div>
</div>


<div class="modal fade" id="passRecovery" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Recuperar password</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <input type="email" name="email" id="email" class="form-control input-md" placeholder="Email" tabindex="1">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success" onclick="passRecovery()">Confirmar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


{include file='common/footer.tpl'}
