function addInput(){
  var newItem = "       <div class=\"form-inline\">\n"+
        "<select class=\"form-control input-sm\" name=\"cor[]\" required>\n"+
          "<option value=\"Branco\">Branco</option>\n"+
          "<option value=\"Preto\">Preto</option>\n"+
          "<option value=\"Azul\">Azul</option>\n"+
          "<option value=\"Amarelo\">Amarelo</option>\n"+
          "<option value=\"Verde\">Verde</option>\n\n"+
          "<option value=\"Vermelho\">Vermelho</option>\n"+
        "</select>\n"+
        "<select class=\"form-control input-sm\" name=\"tamanho[]\" required>\n"+
          "<option value=\"XS\">XS</option>\n"+
          "<option value=\"S\">S</option>\n"+
          "<option value=\"M\">M</option>\n"+
          "<option value=\"L\">L</option>\n"+
          "<option value=\"XL\">XL</option>\n"+
          "<option value=\"XXL\">XXL</option>\n"+
          "<option disabled>────</option>\n"+
          "<option value=\"31\">31</option>\n"+
          "<option value=\"32\">32</option>\n"+
          "<option value=\"33\">33</option>\n"+
          "<option value=\"34\">34</option>\n"+
          "<option value=\"35\">35</option>\n"+
          "<option value=\"36\">36</option>\n"+
          "<option value=\"37\">37</option>\n"+
          "<option value=\"38\">38</option>\n"+
          "<option value=\"39\">39</option>\n"+
          "<option value=\"40\">40</option>\n"+
          "<option value=\"41\">41</option>\n"+
          "<option value=\"42\">42</option>\n"+
          "<option value=\"43\">43</option>\n"+
          "<option value=\"44\">44</option>\n"+
          "<option value=\"45\">45</option>\n"+
          "<option value=\"46\">46</option>\n"+
          "<option value=\"47\">47</option>\n"+
          "<option value=\"48\">48</option>\n"+
          "<option value=\"49\">49</option>\n"+
        "</select>\n"+
        "<input type=\"number\" name=\"quantidade[]\" class=\"form-control input-sm\" min=\"0\" placeholder=\"Quantidade\" required>\n"+
      "</div>\n";
  $("#items").append(newItem);
}

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

function addNewItem(){
  var id = $(".container").data("id");
  var cor = $("#corAddItem").val();
  var tamanho = $("#tamanhoAddItem").val();
  var quantidade = $("#quantidadeAddItem").val();

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
        swal("Erro", "Não foi possível adicionar o item", "error");
      }
      else {
        $('#addItem').modal('hide');
        swal("Sucesso", "Item adicionado", "success");
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
