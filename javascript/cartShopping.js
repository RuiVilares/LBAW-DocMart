function addToCart(){
  swal({
    title: "Adicionar ao carrinho",
    text: "Quantidade a adicionar ao carrinho:",
    type: "input",
    showCancelButton: true,
    closeOnConfirm: false,
    animation: "slide-from-top",
    inputValue: "1" },
    function(inputValue){
      if (Number(inputValue) > Number($("#quantity").val())) {
        swal.showInputError("Não existe a quantidade pretendida em stock");
        return false;
      }
      if (inputValue === "" || Number(inputValue) <= 0 || isNaN(inputValue) || inputValue === parseInt(inputValue, 10)) {
        swal.showInputError("Introduza um valor válido");
        return false
      }
      sendAddCart(inputValue);
    });
}


function sendAddCart(quantity){
  var cor = $("#cor").val();
  var tamanho = $("#tamanho").val();
  var id_artigo = $(".container").data("id");

  var postData =
  {
      "cor":cor,
      "tamanho":tamanho,
      "id_artigo":id_artigo,
      "quantidade":Number(quantity)
  }

  $.ajax({
    type: "POST",
    url: "api/cartShopping/addItem.php",
    contentType: "application/json",
    data: JSON.stringify(postData),
    dataType: "json",
    success: function(data){
      if (data.error){
        swal("Erro", "Não foi possível adicionar o artigo ao carrinho", "error");
      }
      else {
        swal("Sucesso", "Artigo adicionado ao carrinho", "success");
        location = location;
      }
    },
    error: function(e){
      console.log(e);
    }
  });
}

function removeFromCart(id, tamanho, cor){

  var postData =
  {
      "id_artigo":id,
      "tamanho":tamanho,
      "cor":cor
  }

  $.ajax({
    type: "POST",
    url: "api/cartShopping/removeItem.php",
    contentType: "application/json",
    data: JSON.stringify(postData),
    dataType: "json",
    success: function(data){
      if (data.error){
        swal("Erro", "Não foi possível remover o artigo do carrinho", "error");
      }
      else {
        swal("Sucesso", "Artigo removido do carrinho", "success");
        location = location;
      }
    },
    error: function(e){
      console.log(e);
    }
  });
}


$('[data-onload="getTotal()"]').each(function(){
  getTotal();
});

$('[data-onload="carrinhoTotal()"]').each(function(){
  carrinhoTotal();
});

$('[data-onload="buyTotal()"]').each(function(){
  buyTotal();
});

function getTotal(){
  $.ajax({
    type: "GET",
    url: "api/cartShopping/getTotal.php",
    success: function (data) {
      data = data.split('"').join('');
      $("#totalCart").replaceWith("<h3><strong>€" + parseFloat(data) + "</strong></h3>");
    }
  });
}

function carrinhoTotal(){
  $.ajax({
    type: "GET",
    url: "api/cartShopping/getTotal.php",
    success: function (data) {
      if (data != null){
        data = data.split('"').join('');
        $("#carrinhoTotal").replaceWith("Total: €" + parseFloat(data));
      }
    }
  });
}

function buyTotal(){
  $.ajax({
    type: "GET",
    url: "api/cartShopping/getTotal.php",
    success: function (data) {
      if (data != null){
        data = data.split('"').join('');
        $("#buyTotal").append("Total: €" + parseFloat(data));
      }
    }
  });
}

function buy(){
  var name = $("#cardName").val();
  var number = $("#cardNumber").val();
  var cvc = $("#CVC").val();
  var month = $("#expirationMonth").val();
  var year = $("#expirationYear").val();

  if(name == null || number == null || cvc == null || month == null || year == null){
    swal("Erro", "Preencha todos os campos", "error");
    return;
  }

  var postData =
  {
      "name":name,
      "number":number,
      "cvc":cvc,
      "month":month,
      "year":year
  }

  $.ajax({
    type: "POST",
    url: "api/cartShopping/checkout.php",
    contentType: "application/json",
    data: JSON.stringify(postData),
    dataType: "json",
    success: function(data){
      if (data.error){
        swal("Erro", "Não foi possível concluir a compra", "error");
      }
      else {
        swal("Sucesso", "Compra concluida", "success");
        location = location;
      }
    },
    error: function(e){
      console.log(e);
    }
  });
}
