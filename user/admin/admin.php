<div class="container" style='padding-top:50px'>
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6">
      <div class="well well-sm">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <img id="profImg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/2000px-User_icon_2.svg.png" alt="" style="width:100%" class="img-rounded img-responsive"/>
          </div>
          <div class="col-sm-6 col-md-8">
            <h4>Paulo Filipe Moreira Costa</h4>
            <p>
              <i class="glyphicon glyphicon-copy"></i>
              555558889
            </p>
            <p>
              <i class="glyphicon glyphicon-home"></i>
              Rua da Tulipas Cor-de-rosa, Cedofeita, 4200-542 Porto
            </p>
            <p>
              <i class="glyphicon glyphicon-earphone"></i>
              Telefone
            </p>
            <p>
              <i class="glyphicon glyphicon-envelope"></i>
              paulo@gmail.com
            </p>
            <p>
              <i class="glyphicon glyphicon-gift"></i>
              01/12/1992
            </p>
            <!-- Split button -->
          </div>
        </div>
      </div>
      <a href="#" class="btn btn-default">Editar dados</a>
      <a href="#" class="btn btn-default">Alterar password</a>
      <button class="btn btn-default pull-right">Voltar</button>
    </div>
    <!-- Button trigger modal -->
    <button class="btn btn-success btn-lg pull-right" data-toggle="modal" data-target="#addArticle">Adicionar um artigo</button>
  </div>
</div>











<!-- Modal -->
<div class="modal fade" id="addArticle" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Adicionar um artigo
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form role="form">
                  <div class="form-group">
                    <label for="name">Nome</label>
                      <input type="text" class="form-control"
                      id="name" placeholder="Introduza o nome"/>
                  </div>
                  <div class="form-group">
                    <label for="description">Descrição</label>
                      <input type="text" class="form-control"
                      id="description" placeholder="Introduza a descrição"/>
                  </div>


                  <div class="form-group">
                    <label for="genre">Genero do artigo: </label>
                      <input type="checkbox" name="genre" value="M">Masculino
                      <input type="checkbox" name="genre" value="F">Feminino
                  </div>

                  <div class="form-group">
                    <label for="type">Tipo de artigo: </label>
                      <input type="radio" name="type" value="Casaco">Casaco
                      <input type="radio" name="type" value="Camisola">Camisola
                      <input type="radio" name="type" value="Calças">Calças
                      <input type="radio" name="type" value="Sapatos">Sapatos
                      <input type="radio" name="type" value="Acessorios">Acessórios
                  </div> 

                  <div class="form-group">
                    <label for="genre">Tamanhos do artigo: </label>
                      <input type="checkbox" name="size" value="XS">XS
                      <input type="checkbox" name="size" value="S">S
                      <input type="checkbox" name="size" value="M">M
                      <input type="checkbox" name="size" value="L">L
                      <input type="checkbox" name="size" value="XL">XL
                      <input type="checkbox" name="size" value="XXL">XXL
                  </div>

                  <div class="form-group">
                    <label for="genre">Cores do artigo: </label>
                      <input type="checkbox" name="color" value="Branco">Branco
                      <input type="checkbox" name="color" value="Preto">Preto
                      <input type="checkbox" name="color" value="Azul">Azul
                      <input type="checkbox" name="color" value="Amarelo">Amarelo
                      <input type="checkbox" name="color" value="Verde">Verde
                      <input type="checkbox" name="color" value="Vermelho">Vermelho
                  </div>

                  <div class="form-group">
                    <label for="price">Preço</label>
                      <input type="number" step="0.01" class="form-control"
                      id="price" placeholder="Introduza o preço em €"/>
                  </div>
                  <div class="form-group">
                    <label for="stock">Quantidade em stock</label>
                      <input type="number" class="form-control"
                      id="stock" placeholder="Introduza a quantidade em stock"/>
                  </div>
                </form>
                
                
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger"
                        data-dismiss="modal">
                            Cancelar
                </button>
                <button type="button" class="btn btn-success">
                    Adicionar
                </button>
            </div>
        </div>
    </div>
</div>