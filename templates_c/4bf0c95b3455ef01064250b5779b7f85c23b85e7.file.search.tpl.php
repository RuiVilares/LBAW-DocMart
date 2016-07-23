<?php /* Smarty version Smarty-3.1.15, created on 2016-06-06 23:30:46
         compiled from "/opt/lbaw/lbaw1511/public_html/final/templates/item/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1316911926575322e36c4937-96273772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bf0c95b3455ef01064250b5779b7f85c23b85e7' => 
    array (
      0 => '/opt/lbaw/lbaw1511/public_html/final/templates/item/search.tpl',
      1 => 1465248278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1316911926575322e36c4937-96273772',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_575322e3882bc0_89381910',
  'variables' => 
  array (
    'search' => 0,
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
<?php if ($_valid && !is_callable('content_575322e3882bc0_89381910')) {function content_575322e3882bc0_89381910($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- Page Content -->
<div class="container" style="padding-bottom:5%">

  <div class="dropdown" style="float:right;">
    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
      Artigos por página
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
      <li><a href="actions/item/search.php?search=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
&nItems=6">6 artigos</a></li>
      <li><a href="actions/item/search.php?search=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
&nItems=12">12 artigos</a></li>
      <li><a href="actions/item/search.php?search=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
&nItems=24">24 artigos</a></li>
    </ul>
  </div>

  <div class="row">

    <div class="col-md-9">

      <div class="row search-div">
        <?php  $_smarty_tpl->tpl_vars['itemV'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemV']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemV']->key => $_smarty_tpl->tpl_vars['itemV']->value) {
$_smarty_tpl->tpl_vars['itemV']->_loop = true;
?>
        <div class="col-sm-4 col-lg-4 col-md-4">
          <div class="thumbnail">
            <img src="./img/<?php echo $_smarty_tpl->tpl_vars['itemV']->value['caminho_da_fotografia'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['itemV']->value['nome'];?>
" style="width: auto;height: 15em;">
            <div class="caption">
              <h4 class="pull-right">€<?php echo $_smarty_tpl->tpl_vars['itemV']->value['preco'];?>
</h4>
              <h4><a href="pages/item/item.php?id=<?php echo $_smarty_tpl->tpl_vars['itemV']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemV']->value['nome'];?>
</a>
              </h4>
              <p class="item-short-description"><?php echo $_smarty_tpl->tpl_vars['itemV']->value['descricao'];?>
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
        <?php }
if (!$_smarty_tpl->tpl_vars['itemV']->_loop) {
?>
        <h3>Não foi encontrado nenhum artigo.</h3>
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
" onclick='post("actions/item/search.php?search=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
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
        <li><a href="#" onclick='post("actions/item/search.php?search=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
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

<script src="javascript/search.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
