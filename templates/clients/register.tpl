{include file='common/header.tpl'}
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 container">
  <div class="col-sm-2 col-md-2 col-lg-3"></div>
  <div class="col-xs-12 col-sm-8 col-md-8 col-lg-6">
    <form class="form-signin" action="actions/clients/register.php" method="post" enctype="multipart/form-data">
      <h2>
        <a href="#" onclick="return false" class="general" data-toggle="tooltip" title="Para criar uma conta no site deve preencher a informação pedida no formulário em baixo.">
			    <span class="glyphicon glyphicon-info-sign authentication" aria-hidden="true"></span>
			    </a> Registo
      </h2>
      <fieldset>
      <legend>Todos os campos são obrigatórios.</legend>
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control input-md" placeholder="Nome completo" tabindex="1" required>
      </div>
      <div class="form-group">
        <label for="username">Nome de utilizador</label>
        <input type="text" name="username" id="username" class="form-control input-md" placeholder="Nome de utilizador" tabindex="2" required>
      </div>
      <div class="form-group">
        <label for="telemovel">Telemóvel</label>
        <input type="number" name="telemovel" id="telemovel" class="form-control input-md" placeholder="Número de telemóvel" tabindex="3" required>
      </div>
      <div class="form-group">
        <label for="data_de_nascimento">Data de nascimento</label>
        <input type="text" name="data_de_nascimento" id="data_de_nascimento" class="form-control input-md" placeholder="Data de Nascimento (dd/mm/aaaa)" tabindex="4" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control input-md" placeholder="Email" tabindex="5" required>
      </div>
      <div class="form-group">
        <label for="morada">Morada</label>
        <input type="text" name="morada" id="morada" class="form-control input-md" placeholder="Morada completa" tabindex="6" required>
      </div>
      <div class="form-group">
        <label for="contribuinte">Número de contribuinte</label>
        <input type="number" name="contribuinte" id="contribuinte" class="form-control input-md" placeholder="Nº Contribuinte" tabindex="7" required>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control input-md" placeholder="Password" tabindex="8" required>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="form-group">
            <label for="repetirPassword">Password</label>
            <input type="password" name="repetirPassword" id="repetirPassword" class="form-control input-md" placeholder="Repita a Password" tabindex="9" required>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <input type="submit" id="submeter" class="btn btn-md btn-block" value="Registar">
        </div>
        <div class="hidden-xs col-sm-6 col-md-6 col-lg-6">
          <button type="reset" class="btn btn-md btn-block" value="Reset">Limpar</button>
        </div>
      </div>
      </fieldset>
    </form>
    <br>
    <br>
    <br>
  </div>
  <div class="col-sm-2 col-md-2 col-lg-3"></div>
</div>
<script src="javascript/register.js" async></script>
{include file='common/footer.tpl'}
