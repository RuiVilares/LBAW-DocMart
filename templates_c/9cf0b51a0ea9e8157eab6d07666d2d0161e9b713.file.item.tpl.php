<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 05:20:50
         compiled from "/opt/lbaw/lbaw1511/public_html/final/templates/item/item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:518291804574722bf9646b2-17282218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cf0b51a0ea9e8157eab6d07666d2d0161e9b713' => 
    array (
      0 => '/opt/lbaw/lbaw1511/public_html/final/templates/item/item.tpl',
      1 => 1465269640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '518291804574722bf9646b2-17282218',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_574722bf9f69f9_19742499',
  'variables' => 
  array (
    'article' => 0,
    'EMAIL' => 0,
    'ADMIN' => 0,
    'firstComment' => 0,
    'ownComment' => 0,
    'comments' => 0,
    'comment' => 0,
    'sizes' => 0,
    'size' => 0,
    'colors' => 0,
    'color' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574722bf9f69f9_19742499')) {function content_574722bf9f69f9_19742499($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- Page Content  -->
<div class="container" data-id="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" style="padding-bottom:5%">
  <div class="row">
    <div class="hidden-xs col-md-3 col-sm-3">
      <p class="list-group-item"><b>Mulher</b></p>
        <div class="list-group">
          <a href="pages/item/shop.php?genre=Mulher&type=Casaco" class="list-group-item">Casacos</a>
          <a href="pages/item/shop.php?genre=Mulher&type=Camisola" class="list-group-item">Camisolas</a>
          <a href="pages/item/shop.php?genre=Mulher&type=Calcas" class="list-group-item">Calças</a>
          <a href="pages/item/shop.php?genre=Mulher&type=Sapatos" class="list-group-item">Sapatos</a>
        </div>

        <p class="list-group-item"><b>Homem</b></p>
        <div class="list-group">
          <a href="pages/item/shop.php?genre=Homem&type=Casaco" class="list-group-item">Casacos</a>
          <a href="pages/item/shop.php?genre=Homem&type=Camisola" class="list-group-item">Camisolas</a>
          <a href="pages/item/shop.php?genre=Homem&type=Calcas" class="list-group-item">Calças</a>
          <a href="pages/item/shop.php?genre=Homem&type=Sapatos" class="list-group-item">Sapatos</a>
        </div>

        <p class="list-group-item"><b>Acessórios</b></p>
        <div class="list-group">
          <a href="pages/item/shop.php?genre=Homem&type=Acessorio" class="list-group-item">Homem</a>
          <a href="pages/item/shop.php?genre=Mulher&type=Acessorio" class="list-group-item">Mulher</a>
        </div>
    </div>
    <div class="col-md-6 col-sm-6">
      <div class="row">
        <div class="col-md-12  col-sm-12">
          <img src="./img/<?php echo $_smarty_tpl->tpl_vars['article']->value['caminho_da_fotografia'];?>
" class="img-responsive" alt="" />
          <h2><?php echo $_smarty_tpl->tpl_vars['article']->value['nome'];?>
</h2>
          <p class="item-description"><?php echo $_smarty_tpl->tpl_vars['article']->value['descricao'];?>
</p>
          <hr>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4><a href="#" onclick="return false" class="item-page hidden-sm hidden-xs" data-toggle="tooltip" title="Na secção 'Classificações' pode ler comentários
e ver classificações de outros clientes sobre
o artigo ou deixar a sua própria opinião!"></a>
                <span class="glyphicon glyphicon-info-sign" aria-hidden="true"> Classificações</span></h4>
            </div>

          <div class="panel-body">
          <?php if ($_smarty_tpl->tpl_vars['EMAIL']->value&&!$_smarty_tpl->tpl_vars['ADMIN']->value) {?>
            <div class="well well-sm">
              <div class="text-right">
                <span class="btn btn-default" id="open-review-box"><?php if ($_smarty_tpl->tpl_vars['firstComment']->value) {?>Classificar<?php } else { ?>Atualizar classificação<?php }?></span>
              </div>
              <div class="row" id="post-review-box" style="display:none;">
                <div class="col-md-12">
                  <form accept-charset="UTF-8" id="reviewForm">
                    <input id="id" style="display:none;" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
"></input>
                    <input id="firstComment" style="display:none;" value="<?php echo $_smarty_tpl->tpl_vars['firstComment']->value;?>
"></input>
                    <input id="ratings-hidden" name="rating" type="hidden">
                      <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Escreva aqui a sua opinião..." rows="5"><?php if (!$_smarty_tpl->tpl_vars['firstComment']->value) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['ownComment']->value['descricao'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?></textarea>
                    <div class="text-right">
                      <div class="stars starrr" id="stars" data-rating="<?php if (!$_smarty_tpl->tpl_vars['firstComment']->value) {?><?php echo $_smarty_tpl->tpl_vars['ownComment']->value['classificacao'];?>
<?php }?>"></div>
                      <a class="btn btn-danger" href="#" id="close-review-box" style="display:none;">
                      <span class="glyphicon glyphicon-remove"></span> Cancelar</a>
                      <button class="btn btn-success" type="submit">Enviar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          <?php }?>


            <div class="commentsDiv">
            <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
                <hr>
                <?php if ($_smarty_tpl->tpl_vars['ADMIN']->value) {?>
                <button type="button" class="btn btn-danger pull-right" onclick="removeComment(<?php echo $_smarty_tpl->tpl_vars['comment']->value['id_artigo'];?>
, <?php echo $_smarty_tpl->tpl_vars['comment']->value['id_cliente'];?>
)">
                  <span class="glyphicon glyphicon-remove"></span> Remover
                </button>
                <?php }?>
                <p><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['descricao'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                <p>
                  <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['comment']->value['classificacao']+1 - (1) : 1-($_smarty_tpl->tpl_vars['comment']->value['classificacao'])+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                  <span class="glyphicon glyphicon-star"></span>
                  <?php }} ?>
                  <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 4+1 - ($_smarty_tpl->tpl_vars['comment']->value['classificacao']) : $_smarty_tpl->tpl_vars['comment']->value['classificacao']-(4)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['comment']->value['classificacao'], $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                  <span class="glyphicon glyphicon-star-empty"></span>
                  <?php }} ?>
                </p>
            <?php } ?>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-3">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4><a href="#" onclick="return false" class="item-page hidden-sm hidden-xs" data-toggle="tooltip" title="Na secção 'Comprar' pode escolher o tamanho e cor do artigo
que deseja adicionar ao carrinho de compras para depois
o comprar. Se não desejar efetuar a compra do artigo
pode adicioná-lo aos favoritos.">
            <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></a>Comprar</h4>
        </div>
        <div class="panel-body">
          <h3><strong>Preço:</strong> <?php echo $_smarty_tpl->tpl_vars['article']->value['preco'];?>
€</h3>
          <label for="tamanho">Tamanho:</label>
          <select class="form-control input-sm" id="tamanho">
          <?php  $_smarty_tpl->tpl_vars['size'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['size']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sizes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['size']->key => $_smarty_tpl->tpl_vars['size']->value) {
$_smarty_tpl->tpl_vars['size']->_loop = true;
?>
            <option><?php echo $_smarty_tpl->tpl_vars['size']->value;?>
</option>
          <?php } ?>
          </select>
          <label for="cor">Cor:</label>
          <select class="form-control input-sm" id="cor">
          <?php  $_smarty_tpl->tpl_vars['color'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['color']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['colors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['color']->key => $_smarty_tpl->tpl_vars['color']->value) {
$_smarty_tpl->tpl_vars['color']->_loop = true;
?>
            <option><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
</option>
          <?php } ?>
          </select>
          <label for="quantity">Quantidade em stock:</label>
          <input class="form-control input-sm" id="quantity" type="number" value="" data-onload="getQuantity()" readonly>
          <br>
        <?php if ($_smarty_tpl->tpl_vars['EMAIL']->value&&!$_smarty_tpl->tpl_vars['ADMIN']->value) {?>
          <button id="addToCart" class="btn btn-default btn-block text-center" onclick="addToCart()">Adicionar ao carrinho</button>
        <?php } else { ?>
          <button class="btn btn-default btn-block text-center" disabled>Adicionar ao carrinho</button>
        <?php }?>
        </div>
      </div>
      <div class="panel panel-success">
        <div class="panel-body">
        <?php if ($_smarty_tpl->tpl_vars['EMAIL']->value&&!$_smarty_tpl->tpl_vars['ADMIN']->value) {?>
          <button class="btn btn-default btn-block text-center" onclick="addToFavorites()">Adicionar aos favoritos</button>
        <?php } else { ?>
          <button class="btn btn-default btn-block text-center" disabled>Adicionar aos favoritos</button>
        <?php }?>
        </div>
      </div>

      <?php if ($_smarty_tpl->tpl_vars['ADMIN']->value) {?>
      <div class="panel panel-success">
        <div class="panel-body">
          <a class="btn btn-default btn-block text-center" data-toggle="modal" href="pages/item/editArticle.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">Editar artigo</a>
          <br>
          <a class="btn btn-default btn-block text-center" data-toggle="modal" href="#addStock">Adicionar stock</a>
          <br>
          <a class="btn btn-default btn-block text-center" data-toggle="modal" href="#addItem">Adicionar item</a>
          <br>
          <button class="btn btn-danger btn-block text-center" onclick="leaveArticle()">Descontinuar artigo</button>
        </div>
      </div>

      <div class="modal fade" id="addStock" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Adicionar stock</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="tamanho">Tamanho:</label>
                <select class="form-control input-sm" id="tamanhoAdd" tabindex="1">
                <?php  $_smarty_tpl->tpl_vars['size'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['size']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sizes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['size']->key => $_smarty_tpl->tpl_vars['size']->value) {
$_smarty_tpl->tpl_vars['size']->_loop = true;
?>
                  <option><?php echo $_smarty_tpl->tpl_vars['size']->value;?>
</option>
                <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="cor">Cor:</label>
                <select class="form-control input-sm" id="corAdd" tabindex="2">
                <?php  $_smarty_tpl->tpl_vars['color'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['color']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['colors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['color']->key => $_smarty_tpl->tpl_vars['color']->value) {
$_smarty_tpl->tpl_vars['color']->_loop = true;
?>
                  <option><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
</option>
                <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="quantity">Quantidade a adicionar:</label>
                <input class="form-control input-sm" id="quantidadeAdd" type="number" value="1" min="1" tabindex="3">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-success" onclick="addStock()">Confirmar</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="addItem" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Adicionar item</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="tamanho">Tamanho:</label>
                <select class="form-control input-sm" id="tamanhoAddItem" tabindex="1">
                  <option value="XS">XS</option>
                  <option value="S">S</option>
                  <option value="M">M</option>
                  <option value="L">L</option>
                  <option value="XL">XL</option>
                  <option value="XXL">XXL</option>
                  <option disabled>────</option>
                  <option value="31">31</option>
                  <option value="32">32</option>
                  <option value="33">33</option>
                  <option value="34">34</option>
                  <option value="35">35</option>
                  <option value="36">36</option>
                  <option value="37">37</option>
                  <option value="38">38</option>
                  <option value="39">39</option>
                  <option value="40">40</option>
                  <option value="41">41</option>
                  <option value="42">42</option>
                  <option value="43">43</option>
                  <option value="44">44</option>
                  <option value="45">45</option>
                  <option value="46">46</option>
                  <option value="47">47</option>
                  <option value="48">48</option>
                  <option value="49">49</option>
                </select>
              </div>
              <div class="form-group">
                <label for="cor">Cor:</label>
                <select class="form-control input-sm" id="corAddItem" tabindex="2">
                  <option value="Branco">Branco</option>
                  <option value="Preto">Preto</option>
                  <option value="Azul">Azul</option>
                  <option value="Amarelo">Amarelo</option>
                  <option value="Verde">Verde</option>
                  <option value="Vermelho">Vermelho</option>
                </select>
              </div>
              <div class="form-group">
                <label for="quantity">Quantidade a adicionar:</label>
                <input class="form-control input-sm" id="quantidadeAddItem" type="number" value="1" min="1" tabindex="3">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-success" onclick="addNewItem()">Confirmar</button>
            </div>
          </div>
        </div>
      </div>

      <?php }?>

    </div>
  </div>
  <!-- /.row -->
</div>
<script src="javascript/review.js" async></script>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
