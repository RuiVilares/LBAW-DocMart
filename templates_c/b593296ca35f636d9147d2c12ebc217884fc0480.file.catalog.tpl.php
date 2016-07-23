<?php /* Smarty version Smarty-3.1.15, created on 2016-06-06 23:20:47
         compiled from "/opt/lbaw/lbaw1511/public_html/final/templates/item/catalog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1267123466573f2d5daf29d0-85951772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b593296ca35f636d9147d2c12ebc217884fc0480' => 
    array (
      0 => '/opt/lbaw/lbaw1511/public_html/final/templates/item/catalog.tpl',
      1 => 1465248032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1267123466573f2d5daf29d0-85951772',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_573f2d5db94970_80243515',
  'variables' => 
  array (
    'items' => 0,
    'itemV' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573f2d5db94970_80243515')) {function content_573f2d5db94970_80243515($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- Page Content -->
<div class="container" style="padding-bottom:5%">

    <div class="row">

        <div class="col-md-12">

            <div class="row carousel-holder">

                <div class="col-md-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="slide-image" src="img/DocMart.png" alt="DocMart">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="http://www.peopletree.co.uk/Configuration/PeopleTree/Downloads/images/2015%20New%20Category%20Pages/NEW-mens-category-page.jpg" alt="Roupa para Homem">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="http://www.roupadobem.com.br/slide/data1/images/slide3.jpg" alt="Roupa para Mulher">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>

            </div>

            <hr>

            <div class="row">

                <?php  $_smarty_tpl->tpl_vars['itemV'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemV']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemV']->key => $_smarty_tpl->tpl_vars['itemV']->value) {
$_smarty_tpl->tpl_vars['itemV']->_loop = true;
?>
                <div class="col-sm-4 col-lg-4 col-md-4">
                  <div class="thumbnail">
                    <img src="./img/<?php echo $_smarty_tpl->tpl_vars['itemV']->value['caminho_da_fotografia'];?>
" class="img-500" alt="<?php echo $_smarty_tpl->tpl_vars['itemV']->value['nome'];?>
" style="width: auto;height: 25em;">
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
                <?php } ?>

            </div>

        </div>

    </div>

</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
