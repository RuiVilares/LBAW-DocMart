{include file='common/header.tpl'}
<div class="container" style="padding-top:0.5%; padding-bottom:5%; width:80%">
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      <form class="form-signin" action="actions/clients/register.php" method="post" enctype="multipart/form-data">
        <h2>Registo</h2>
        <hr/>
        <div class="form-group">
          <input type="text" name="nome" id="nome" class="form-control input-md" placeholder="Nome completo" tabindex="1">
        </div>
        <div class="form-group">
          <input type="text" name="username" id="username" class="form-control input-md" placeholder="Nome de utilizador" tabindex="2">
        </div>
        <div class="form-group">
          <input type="text" name="telemovel" id="telemovel" class="form-control input-md" placeholder="Número de telemóvel" tabindex="3">
        </div>
        <div class="form-group">
          <input type="text" name="data_de_nascimento" id="data_de_nascimento" class="form-control input-md" placeholder="Data de Nascimento (dd/mm/aaaa)" tabindex="4">
        </div>
        <div class="form-group">
          <input type="email" name="email" id="email" class="form-control input-md" placeholder="Email" tabindex="5">
        </div>
        <div class="form-group">
          <input type="morada" name="morada" id="morada" class="form-control input-md" placeholder="Morada completa" tabindex="6">
        </div>
        <div class="form-group">
          <input type="Contribuinte" name="contribuinte" id="contribuinte" class="form-control input-md" placeholder="Nº Contribuinte" tabindex="7">
        </div>
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
              <input type="password" name="password" id="password" class="form-control input-md" placeholder="Password" tabindex="8">
            </div>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
              <input type="password" name="repetirPassword" id="repetirPassword" class="form-control input-md" placeholder="Repita a Password" tabindex="9">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-6 col-md-6">
            <input type="submit" class="btn btn-md btn-block" value="Registar">
          </div>
          <div class="col-xs-6 col-md-6">
            <button type="reset" class="btn btn-md btn-block" value="Reset">Limpar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
{include file='common/footer.tpl'}
