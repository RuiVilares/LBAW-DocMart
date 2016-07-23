function changePassword() {
  var oldPassword = $('#oldPassword').val();
  var newPassword = $('#newPassword').val();
  var repeatPassword = $('#repeatPassword').val();

  if (newPassword != repeatPassword)
    swal("Erro", "As passwords não coincindem!", "error");
  else if (newPassword == "")
    swal("Erro", "A password não pode ser vazia", "error");
  else {
    var postData =
      {
        "oldPassword":oldPassword,
        "newPassword":newPassword
      }
      $.ajax({
        type: "POST",
        url: "api/authentication/changePassword.php",
        contentType: "application/json",
        data: JSON.stringify(postData),
        dataType: "json",
        success: function(data){
          if (data.error){
            swal("Erro", "Password incorreta", "error");
          }
          else {
            $('#changePass').modal('hide');
            swal("Sucesso", "Password alterada", "success");
          }
        },
        error: function(e){
          console.log(e);
        }
      });
  }
}

function changeInfo() {

  var nome = $('#nome').val();
  var username = $('#username').val();
  var telemovel = $('#telemovel').val();
  var data_de_nascimento = $('#data_de_nascimento').val();
  var email = $('#email').val();
  var morada = $('#morada').val();
  var contribuinte = $('#contribuinte').val();

  if (nome == "" || username == "" || telemovel == "" || data_de_nascimento == "" || email == "" || morada == "" || contribuinte == "")
    swal("Erro", "Os campos têm que estar todos preenchidos!", "error");
  else {
    var postData =
      {
        "nome":nome,
        "username":username,
        "telemovel":telemovel,
        "data_de_nascimento":data_de_nascimento,
        "email":email,
        "morada":morada,
        "contribuinte":contribuinte
      }
      $.ajax({
        type: "POST",
        url: "api/clients/changeInfo.php",
        contentType: "application/json",
        data: JSON.stringify(postData),
        dataType: "json",
        success: function(data){
          if (data.error){
            swal("Erro", "Erro na atualização de dados", "error");
          }
          else {
            $('#changeInfo').modal('hide');
            location.reload();
          }
        },
        error: function(e){
          console.log(e);
        }
      });
  }
}

function lock(id, bool){

  var postData =
  {
    "id":id,
    "desativado":bool
  }
  $.ajax({
    type: "POST",
    url: "api/clients/lock.php",
    contentType: "application/json",
    data: JSON.stringify(postData),
    dataType: "json",
    success: function(data){
      if (data.error){
        swal("Erro", "Ocorreu um erro", "error");
      }
      else {
        location.reload();
      }
    },
    error: function(e){
      console.log(e);
    }
  });
}

function passRecovery(){

  var email = $('#email').val();

  var postData =
  {
    "email":email
  }
  $.ajax({
    type: "POST",
    url: "api/authentication/passRecovery.php",
    contentType: "application/json",
    data: JSON.stringify(postData),
    dataType: "json",
    success: function(data){
      if (data.error){
        swal("Erro", "O utilizador não existe", "error");
      }
      else {
        swal("Sucesso", "Enviado email com uma nova password", "success");
        $('#passRecovery').modal('hide');
      }
    },
    error: function(e){
      console.log(e);
    }
  });
}
