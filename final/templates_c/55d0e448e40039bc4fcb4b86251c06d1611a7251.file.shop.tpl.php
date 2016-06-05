<?php /* Smarty version Smarty-3.1.15, created on 2016-06-04 20:42:35
         compiled from "/opt/lbaw/lbaw1511/public_html/final/templates/item/shop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91666924457461a6b076f68-10113013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55d0e448e40039bc4fcb4b86251c06d1611a7251' => 
    array (
      0 => '/opt/lbaw/lbaw1511/public_html/final/templates/item/shop.tpl',
      1 => 1465065743,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91666924457461a6b076f68-10113013',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57461a6b19f1f4_38801889',
  'variables' => 
  array (
    'genre' => 0,
    'type' => 0,
    'items' => 0,
    'itemV' => 0,
    'page' => 0,
    'foo' => 0,
    'lastId' => 0,
    'nItems' => 0,
    'numPages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57461a6b19f1f4_38801889')) {function content_57461a6b19f1f4_38801889($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- Page Content -->
<div class="container" style="padding-bottom:5%">

  <div class="row">

    <div class="col-md-3">
      <p class="list-group-item"><b><?php echo $_smarty_tpl->tpl_vars['genre']->value;?>
</b></p>
      <div class="list-group">
        <a href="pages/item/shop.php?genre=<?php echo $_smarty_tpl->tpl_vars['genre']->value;?>
&type=Casaco" class="list-group-item">Casacos</a>
        <a href="pages/item/shop.php?genre=<?php echo $_smarty_tpl->tpl_vars['genre']->value;?>
&type=Camisola" class="list-group-item">Camisolas</a>
        <a href="pages/item/shop.php?genre=<?php echo $_smarty_tpl->tpl_vars['genre']->value;?>
&type=Calcas" class="list-group-item">Calças</a>
        <a href="pages/item/shop.php?genre=<?php echo $_smarty_tpl->tpl_vars['genre']->value;?>
&type=Sapatos" class="list-group-item">Sapatos</a>
        <a href="pages/item/shop.php?genre=<?php echo $_smarty_tpl->tpl_vars['genre']->value;?>
&type=Acessorio" class="list-group-item">Acessórios</a>
      </div>

      <form action="pages/item/shop.php?genre=<?php echo $_smarty_tpl->tpl_vars['genre']->value;?>
&type=Casaco" method="post">
      <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#collapse1">Tamanho</a>
            </h4>
          </div>
          <div id="collapse1" class="panel-collapse collapse">
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="XS">XS</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="S">S</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="M">M</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="L">L</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="XL">XL</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="XXL">XXL</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="31">31</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="32">32</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="33">33</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="34">34</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="35">35</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="36">36</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="37">37</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="38">38</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="39">39</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="40">40</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="41">41</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="42">42</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="43">43</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="44">44</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="45">45</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="46">46</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="47">47</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="48">48</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="sizes[]" value="49">49</label>
            </div>
          </div>
        </div>
      </div>

      <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#collapse2">Cor</a>
            </h4>
          </div>
          <div id="collapse2" class="panel-collapse collapse">
            <div class="checkbox">
              <label><input type="checkbox" name="colors[]" value="Branco">Branco</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="colors[]" value="Preto">Preto</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="colors[]" value="Azul">Azul</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="colors[]" value="Amarelo">Amarelo</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="colors[]" value="Verde">Verde</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="colors[]" value="Vermelho">Vermelho</label>
            </div>
          </div>
        </div>
      </div>

      <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#collapse3">Preço</a>
            </h4>
          </div>
          <div id="collapse3" class="panel-collapse collapse">
            <div>
              <label for="priceMin">Minimum:</label>
              <input type="number" name="minPrice" class="form-control" id="priceMin" min="0" max="9998" value ="0" step="1"></input>
            </div>
            <div>
              <label for="priceMax">Maximum:</label>
              <input type="number" name="maxPrice" class="form-control" id="priceMax" min="0" max="9999" value="9999" step="1"></input>
            </div>
          </div>
        </div>
      </div>
      <input type="submit" class="btn" value="Pesquisar">
    </form>
    </div>

    <div class="dropdown" style="float:right;">
      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Artigos por página
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <li><a href="pages/item/shop.php?genre=<?php echo $_smarty_tpl->tpl_vars['genre']->value;?>
&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
&nItems=5">5 artigos</a></li>
        <li><a href="pages/item/shop.php?genre=<?php echo $_smarty_tpl->tpl_vars['genre']->value;?>
&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
&nItems=10">10 artigos</a></li>
        <li><a href="pages/item/shop.php?genre=<?php echo $_smarty_tpl->tpl_vars['genre']->value;?>
&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
&nItems=20">20 artigos</a></li>
      </ul>
    </div>

    <div class="col-md-9">

      <div class="row">

        <?php  $_smarty_tpl->tpl_vars['itemV'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemV']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemV']->key => $_smarty_tpl->tpl_vars['itemV']->value) {
$_smarty_tpl->tpl_vars['itemV']->_loop = true;
?>
        <div class="col-sm-4 col-lg-4 col-md-4">
          <div class="thumbnail">
            <img src="http://placehold.it/320x150" alt="<?php echo $_smarty_tpl->tpl_vars['itemV']->value['caminho_da_fotografia'];?>
">
            <div class="caption">
              <h4 class="pull-right">€<?php echo $_smarty_tpl->tpl_vars['itemV']->value['preco'];?>
</h4>
              <h4><a href="pages/item/item.php?id=<?php echo $_smarty_tpl->tpl_vars['itemV']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemV']->value['nome'];?>
</a>
              </h4>
              <p><?php echo $_smarty_tpl->tpl_vars['itemV']->value['descricao'];?>
</p>
            </div>
            <div class="ratings">
              <p class="pull-right"><?php echo $_smarty_tpl->tpl_vars['itemV']->value['count'];?>
 avaliações</p>
              <p>
                <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['itemV']->value['avg']+1 - (1) : 1-($_smarty_tpl->tpl_vars['itemV']->value['avg'])+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                <span class="glyphicon glyphicon-star"></span>
                <?php }} ?>
                <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 4+1 - ($_smarty_tpl->tpl_vars['itemV']->value['avg']) : $_smarty_tpl->tpl_vars['itemV']->value['avg']-(4)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['itemV']->value['avg'], $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                <span class="glyphicon glyphicon-star-empty"></span>
                <?php }} ?>
              </p>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>

      <ul class="pagination">
        <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['page']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['page']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
        <li
        <?php if ($_smarty_tpl->tpl_vars['foo']->value==$_smarty_tpl->tpl_vars['page']->value) {?>
        class="active"
        <?php }?>
        ><a class="pages" href="#" id="<?php echo -$_smarty_tpl->tpl_vars['lastId']->value;?>
" onclick='post("pages/item/shop.php?genre=<?php echo $_smarty_tpl->tpl_vars['genre']->value;?>
&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
&nItems=<?php echo $_smarty_tpl->tpl_vars['nItems']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
",{"lastId": "<?php echo -$_smarty_tpl->tpl_vars['lastId']->value;?>
"}); return false;'><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
        <?php }} ?>
        <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['numPages']->value+1 - ($_smarty_tpl->tpl_vars['page']->value) : $_smarty_tpl->tpl_vars['page']->value-($_smarty_tpl->tpl_vars['numPages']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['page']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
        <?php if ($_smarty_tpl->tpl_vars['foo']->value!=$_smarty_tpl->tpl_vars['page']->value) {?>
        <li><a href="#" onclick='post("pages/item/shop.php?genre=<?php echo $_smarty_tpl->tpl_vars['genre']->value;?>
&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
&nItems=<?php echo $_smarty_tpl->tpl_vars['nItems']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
",{"lastId": "<?php echo $_smarty_tpl->tpl_vars['lastId']->value+1;?>
"}); return false;'><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
        <?php }?>
        <?php }} ?>
      </ul>

    </div>

  </div>

</div>

<script src="javascript/items.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
