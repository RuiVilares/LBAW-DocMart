{include file='common/header.tpl'}
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 container">
  <div class="col-xs-1 col-sm-2 col-md-3 col-lg-3"></div>
  <div class="col-xs-10 col-sm-8 col-md-6 col-lg-6">
    <div class="row  well well-sm">
      <div class="hidden-xs col-sm-4 col-md-4 col-lg-4">
        <img id="profImg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/2000px-User_icon_2.svg.png" alt="" style="width:100%" class="img-rounded img-responsive"/>
      </div>
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        <h4>{$client.nome}</h4>
        <p><i class="glyphicon glyphicon-copy"></i>{$client.contribuinte}</p>
        <p><i class="glyphicon glyphicon-home"></i>{$client.morada}</p>
        <p><i class="glyphicon glyphicon-earphone"></i>{$client.telefone}</p>
        <p><i class="glyphicon glyphicon-envelope"></i>{$client.email}</p>
        <p><i class="glyphicon glyphicon-gift"></i>{$client.data_de_nascimento}</p>
      </div>
    </div>
    <div class="row">
      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#changeInfo">Editar dados</button>
      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#changePass">Alterar password</button>
      <a href="#" onclick="return false" class="profile" data-toggle="tooltip" title="Aqui pode editar os dados do seu perfil ou alterar a sua password. Se deseja voltar ao site basta clicar no botão Voltar.">
        <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
      </a>
      <a href="." class="btn btn-default pull-right">Voltar</a>
    </div>
  </div>
  <div class="col-xs-1 col-sm-2 col-md-3 col-lg-3"></div>
</div>

<div class="modal fade" id="changeInfo" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Editar dados</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          Name: <input type="text" name="nome" id="nome" class="form-control input-md" value="{$client.nome}" tabindex="1">
        </div>
        <div class="form-group">
          Username: <input type="text" name="username" id="username" class="form-control input-md" value="{$client.username}" tabindex="2">
        </div>
        <div class="form-group">
          Telemovel: <input type="number" name="telemovel" id="telemovel" class="form-control input-md" value="{$client.telefone}" tabindex="3">
        </div>
        <div class="form-group">
          Data de nascimento: <input type="text" name="data_de_nascimento" id="data_de_nascimento" class="form-control input-md" value="{$client.data_de_nascimento}" tabindex="4">
        </div>
        <div class="form-group">
          Email: <input type="email" name="email" id="email" class="form-control input-md" value="{$client.email}" tabindex="5">
        </div>
        <div class="form-group">
          Morada: <input type="text" name="morada" id="morada" class="form-control input-md" value="{$client.morada}" tabindex="6">
        </div>
        <div class="form-group">
          Contribuinte: <input type="number" name="contribuinte" id="contribuinte" class="form-control input-md" value="{$client.contribuinte}" tabindex="7">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success" onclick="changeInfo()">Confirmar</button>
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


{include file='common/footer.tpl'}
