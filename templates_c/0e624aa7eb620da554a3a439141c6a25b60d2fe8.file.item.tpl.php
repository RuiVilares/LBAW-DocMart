<?php /* Smarty version Smarty-3.1.15, created on 2016-04-28 14:13:41
         compiled from "/opt/lbaw/lbaw1511/public_html/proto/templates/item/item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:233077905721fe75c84ea1-00855886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e624aa7eb620da554a3a439141c6a25b60d2fe8' => 
    array (
      0 => '/opt/lbaw/lbaw1511/public_html/proto/templates/item/item.tpl',
      1 => 1461832879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '233077905721fe75c84ea1-00855886',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5721fe75d1c588_42830266',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5721fe75d1c588_42830266')) {function content_5721fe75d1c588_42830266($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- Page Content -->
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
</div>
</div>
<!-- /.row -->
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
