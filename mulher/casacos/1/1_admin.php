<div class="container" style="padding-bottom:5%">
    <div class="row">
        <div class="col-md-3 col-sm-3">
          <p class="list-group-item"><b>Mulher</b></p>
          <div class="list-group">
            <a href="#" class="list-group-item">Casacos</a>
            <a href="#" class="list-group-item">Camisolas</a>
            <a href="#" class="list-group-item">Calças</a>
            <a href="#" class="list-group-item">Sapatos</a>
            <a href="#" class="list-group-item">Coleção</a>
        </div>

        <p class="list-group-item"><b>Homem</b></p>
        <div class="list-group">
            <a href="#" class="list-group-item">Casacos</a>
            <a href="#" class="list-group-item">Camisolas</a>
            <a href="#" class="list-group-item">Calças</a>
            <a href="#" class="list-group-item">Sapatos</a>
            <a href="#" class="list-group-item">Coleção</a>
        </div>

        <p class="list-group-item"><b>Acessórios</b></p>
        <div class="list-group">
            <a href="#" class="list-group-item">Homem</a>
            <a href="#" class="list-group-item">Mulher</a>
        </div>
    </div>           
    <div class="col-md-6 col-sm-6">
       <div class="row">
          <div class="col-md-12  col-sm-12">
           <img src="http://oudeltasig.org/wp-content/uploads/2013/08/vintage-leather-jacket.jpg" class="img-responsive" alt="" />
           <h2>Casaco UF</h2>
           <p>Casaco muito típico e tradicional. Excelente escolha para os apaixonados da moda. Várias cores e tamanhos.</p>

           <hr>    

           <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Classificações</h4> 
            </div>


                <div class="panel-body">


                    <div class="well well-sm">
                        <div class="text-right">
                            <a class="btn btn-default" href="#reviews-anchor" id="open-review-box">Classificar</a>
                        </div>

                        <div class="row" id="post-review-box" style="display:none;">
                            <div class="col-md-12">
                                <form accept-charset="UTF-8" action="" method="post">
                                    <input id="ratings-hidden" name="rating" type="hidden"> 
                                    <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5"></textarea>

                                    <div class="text-right">
                                        <div class="stars starrr" data-rating="0"></div>
                                        <a class="btn btn-danger" href="#" id="close-review-box" style="display:none;">
                                            <span class="glyphicon glyphicon-remove"></span>Cancel</a>
                                            <button class="btn btn-success" type="submit">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>         
                        </div>

                    <hr>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </p>
                    <p>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </p>
                    <hr>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </p>
                    <p>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </p>
                </div>
            </div>    
        </div>
    </div>

</div>
<div class="col-md-3 col-sm-3">

    <div class="panel panel-default">
        <div class="panel-heading">
           <h4>Comprar</h4> 
       </div>
       <div class="panel-body">
        <h3><strong>Preço:</strong> 31.25€</h3>
        <br>
        <h4><strong>Quantidade em stock:</strong> 10</h4>
        <br>

        <strong>Tamanho:</strong>
        <p>
            <label class="radio-inline"><input type="radio" name="size">XS</label>
            <label class="radio-inline"><input type="radio" name="size">S</label>
            <label class="radio-inline"><input type="radio" name="size" checked>M</label>
            <label class="radio-inline"><input type="radio" name="size">L</label>
            <label class="radio-inline"><input type="radio" name="size">XL</label>
        </p>
        <strong>Cor:</strong>
        <p>
            <label class="radio-inline"><input type="radio" name="color" checked>Amarelo</label>
            <label class="radio-inline"><input type="radio" name="color">Branco</label>
            <label class="radio-inline"><input type="radio" name="color">Preto</label>
        </p>
        <center><a href="#" class="btn btn-default">Adicionar ao carrinho</a></center>
    </div>
</div>
<div class="panel panel-success">
    <div class="panel-body">
        <center><a href="#" class="btn btn-default">Adicionar aos favoritos</a></center>
    </div>
</div>
<div class="panel panel-success">
    <div class="panel-body">
        <center><button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#editArticle">Editar artigo</button></center>
    </div>
</div>
</div>
</div>
<!-- /.row -->
</div>



<!-- Modal -->
<div class="modal fade" id="editArticle" tabindex="-1" role="dialog" 
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
                    Editar artigo
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form role="form">
                  <div class="form-group">
                    <label for="name">Nome</label>
                      <input type="text" class="form-control"
                      id="name" value="Casaco UF"/>
                  </div>
                  <div class="form-group">
                    <label for="description">Descrição</label>
                      <input type="text" class="form-control"
                      id="description" value="Casaco muito típico e tradicional. Excelente escolha para os apaixonados da moda. Várias cores e tamanhos."/>
                  </div>

                  <div class="form-group">
                    <label for="genre">Genero do artigo: </label>
                      <input type="checkbox" name="genre" value="M">Masculino
                      <input type="checkbox" name="genre" value="F" checked>Feminino
                  </div>

                  <div class="form-group">
                    <label for="type">Tipo de artigo: </label>
                      <input type="radio" name="type" value="Casaco" checked>Casaco
                      <input type="radio" name="type" value="Camisola">Camisola
                      <input type="radio" name="type" value="Calças">Calças
                      <input type="radio" name="type" value="Sapatos">Sapatos
                      <input type="radio" name="type" value="Acessorios">Acessórios
                  </div> 

                  <div class="form-group">
                    <label for="genre">Tamanhos do artigo: </label>
                      <input type="checkbox" name="size" value="XS" checked>XS
                      <input type="checkbox" name="size" value="S" checked>S
                      <input type="checkbox" name="size" value="M" checked>M
                      <input type="checkbox" name="size" value="L" checked>L
                      <input type="checkbox" name="size" value="XL" checked>XL
                      <input type="checkbox" name="size" value="XXL">XXL
                  </div>

                  <div class="form-group">
                    <label for="genre">Cores do artigo: </label>
                      <input type="checkbox" name="color" value="Branco" checked>Branco
                      <input type="checkbox" name="color" value="Preto" checked>Preto
                      <input type="checkbox" name="color" value="Azul">Azul
                      <input type="checkbox" name="color" value="Amarelo" checked>Amarelo
                      <input type="checkbox" name="color" value="Verde">Verde
                      <input type="checkbox" name="color" value="Vermelho">Vermelho
                  </div>
                  
                  <div class="form-group">
                    <label for="price">Preço</label>
                      <input type="number" step="0.01" class="form-control"
                      id="price" value="31.25"/>
                  </div>
                  <div class="form-group">
                    <label for="stock">Quantidade em stock</label>
                      <input type="number" class="form-control"
                      id="stock" value="10"/>
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
                    Editar
                </button>
            </div>
        </div>
    </div>
</div>