var counter = 1;

function addArticle() {
  var array = [];

  for (var i = 0; i < counter; i++){
    array.push({
      'cor':$("#cor"+i).val(),
      'tamanho':$("#tamanho"+i).val(),
      'quantidade':$("#quantidade"+i).val()
    })
  }

  var nome = $('#nome').val();
  var descricao = $('#descricao').val();
  var preco = $('#preco').val();
  var tipo = $('#tipo').val();
  var genero = $('#genero').val();

  var postData =
  {
      "nome":nome,
      "descricao":descricao,
      "preco":preco,
      "tipo":tipo,
      "genero":genero,
      "array":array
  }

  $.ajax({
    type: "POST",
    url: "api/article/addArticle.php",
    contentType: "application/json",
    data: JSON.stringify(postData),
    dataType: "json",
    success: function(data){
      if (data.error){
        swal("Erro", "Não foi possível adicionar o artigo", "error");
      }
      else {
        $('#addArticle').modal('hide');
        swal("Sucesso", "Artigo adicionado", "success");
      }
    },
    error: function(e){
      console.log(e);
    }
  });
}

function addInput(){
  var newItem = "					<div class='form-inline'>\n"+
                "						<input type='text' name='cor' id='cor" + counter + "' class='form-control input-sm' placeholder='Cor'>\n"+
  						  "						<input type='text' name='tamanho' id='tamanho" + counter + "' class='form-control input-sm' placeholder='Tamanho'>\n"+
  						  "						<input type='number' name='quantidade' id='quantidade" + counter + "' class='form-control input-sm' placeholder='Quantidade'>\n"+
                "					</div>\n";
  $("#items").append(newItem);
  counter++;
}

$( "#foto" ).change(function() {
  var input = $(this);
  console.log(input);
  var numFiles = input.get(0).files ? input.get(0).files.length : 1;
  console.log(numFiles);
  var label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
  $("#fotoLabel").text(label);
});

function getQuantity(){
  var cor = $("#cor").val();
  var tamanho = $("#tamanho").val();
  var id_artigo = $(".container").data("id");

  var postData =
  {
      "cor":cor,
      "tamanho":tamanho,
      "id_artigo":id_artigo
  }

  $.ajax({
    type: "POST",
    url: "api/article/getQuantity.php",
    contentType: "application/json",
    data: JSON.stringify(postData),
    dataType: "json",
    success: function(data){
      if(data.success.quantidade){
        $("#quantity").val(data.success.quantidade);
      }
      else{
        $("#quantity").val(0);
      }
      if ($("#quantity").val() <= 0) {
        $('#addToCart').attr("disabled", true);
      }
      else {
        $('#addToCart').attr("disabled", false);
      }
    },
    error: function(e){
      console.log(e);
    }
  });
}


$("#cor").change(function() {
  getQuantity();
});

$("#tamanho").change(function() {
  getQuantity();
});

$('[data-onload="getQuantity()"]').each(function(){
    getQuantity();
});

function addStock(){
  var id = $(".container").data("id");
  var cor = $("#corAdd").val();
  var tamanho = $("#tamanhoAdd").val();
  var quantidade = $("#quantidadeAdd").val();

  var postData =
  {
      "id":id,
      "cor":cor,
      "tamanho":tamanho,
      "quantidade":quantidade
  }

  $.ajax({
    type: "POST",
    url: "api/article/addStock.php",
    contentType: "application/json",
    data: JSON.stringify(postData),
    dataType: "json",
    success: function(data){
      console.log(data);
      if (data.error){
        swal("Erro", "Não foi possível adicionar stock", "error");
      }
      else {
        $('#addStock').modal('hide');
        swal("Sucesso", "Stock adicionado", "success");
        location = location;
      }
    },
    error: function(e){
      console.log(e);
    }
  });
}

function editArticle(){
  var id = $(".container").data("id");
  var nome = $('#nomeEdit').val();
  var descricao = $('#descricaoEdit').val();
  var preco = $('#precoEdit').val();
  var tipo = $('#tipoEdit').val();
  var genero = $('#generoEdit').val();

  var postData =
  {
      "id":id,
      "nome":nome,
      "descricao":descricao,
      "preco":preco,
      "tipo":tipo,
      "genero":genero
  }

  $.ajax({
    type: "POST",
    url: "api/article/editArticle.php",
    contentType: "application/json",
    data: JSON.stringify(postData),
    dataType: "json",
    success: function(data){
      if (data.error){
        swal("Erro", "Não foi possível editar o artigo", "error");
      }
      else {
        $('#editArticle').modal('hide');
        swal("Sucesso", "Artigo editado", "success");
        location = location;
      }
    },
    error: function(e){
      console.log(e);
    }
  });
}

function leaveArticle(){
  swal({
    title: "Tem a certeza?",
    text: "Todos os items deste artigo serão descontinuados!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Sim, tenho!",
    cancelButtonText: "Cancelar",
    closeOnConfirm: false },
    function(){
      var id = $(".container").data("id");

      var postData =
      {
          "id":id
      }

      $.ajax({
        type: "POST",
        url: "api/article/leaveArticle.php",
        contentType: "application/json",
        data: JSON.stringify(postData),
        dataType: "json",
        success: function(data){
          if (data.error){
            swal("Erro", "Não foi possível descontinuar o artigo", "error");
          }
          else {
            swal("Sucesso", "Artigo descontinuado", "success");
            location = location;
          }
        },
        error: function(e){
          console.log(e);
        }
      });
    });
}

function removeComment(id_artigo, id_cliente){
  swal({
    title: "Tem a certeza?",
    text: "Este comentário será removido!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Sim, tenho!",
    cancelButtonText: "Cancelar",
    closeOnConfirm: false },
    function(){

      var postData =
      {
          "id_artigo":id_artigo,
          "id_cliente":id_cliente
      }

      $.ajax({
        type: "POST",
        url: "api/commentClassFav/removeComment.php",
        contentType: "application/json",
        data: JSON.stringify(postData),
        dataType: "json",
        success: function(data){
          if (data.error){
            swal("Erro", "Não foi possível remover o comentário.", "error");
          }
          else {
            swal("Sucesso", "Comentário apagado.", "success");
            location = location;
          }
        },
        error: function(e){
          console.log(e);
        }
      });
    }
  );
}
