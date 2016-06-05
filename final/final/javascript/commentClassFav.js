function addToFavorites(){

  var id_artigo = $(".container").data("id");

  var postData =
  {
      "id_artigo":id_artigo
  }

  $.ajax({
    type: "POST",
    url: "api/commentClassFav/addToFavorites.php",
    contentType: "application/json",
    data: JSON.stringify(postData),
    dataType: "json",
    success: function(data){
      if (data.error){
        swal("Erro", "Este artigo já existe nos favoritos", "error");
      }
      else {
        swal("Sucesso", "Artigo adicionado aos favoritos", "success");
      }
    },
    error: function(e){
      swal("Erro", "Ocorreu um erro", "error");
    }
  });
}

function removeFavorite(id){
  var postData =
  {
      "id":id
  }

  $.ajax({
    type: "POST",
    url: "api/commentClassFav/removeFromFavorites.php",
    contentType: "application/json",
    data: JSON.stringify(postData),
    dataType: "json",
    success: function(data){
      if (data.error){
        swal("Erro", "Não foi possível remover o artigo dos favoritos", "error");
      }
      else {
        swal("Sucesso", "Artigo removido dos favoritos", "success");
        location = location;
      }
    },
    error: function(e){
      console.log(e);
    }
  });
}
