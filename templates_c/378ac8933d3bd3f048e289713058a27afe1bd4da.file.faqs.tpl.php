<?php /* Smarty version Smarty-3.1.15, created on 2016-06-06 21:16:09
         compiled from "/opt/lbaw/lbaw1511/public_html/final/templates/info/faqs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64419523057484eeaf12c91-16789663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '378ac8933d3bd3f048e289713058a27afe1bd4da' => 
    array (
      0 => '/opt/lbaw/lbaw1511/public_html/final/templates/info/faqs.tpl',
      1 => 1465240569,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64419523057484eeaf12c91-16789663',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57484eeb0a8a66_91889356',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57484eeb0a8a66_91889356')) {function content_57484eeb0a8a66_91889356($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- Page Content -->
<div class="container" style="padding-bottom:5%">
    <br />
    <br />
    <br />

    <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        Esta secção apresenta informação importante, relacionada com a <strong>DocMart</strong>. Se não encontrar resposta para a sua questão,
        contacte-nos.
    </div>

    <br />

    <div class="panel-group" id="accordion">
        <div class="faqHeader">Questões gerais</div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">É necessário conta registada?</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse">
                <div class="panel-body">
                    Conta registada só é necessária para compra de artigos e edição da lista de favoritos e comentários/classificações.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">Qual é o método de pagamento?</a>
                </h4>
            </div>
            <div id="collapseTen" class="panel-collapse collapse">
                <div class="panel-body">
                    Todas as compras podem ser pagas através de cartão de crédito ou débito.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">Qual a moeda utilizada em todas as transações?</a>
                </h4>
            </div>
            <div id="collapseEleven" class="panel-collapse collapse">
                <div class="panel-body">
                    Todos os artigos e contas de clientes estão em <strong>EUR</strong>.
                </div>
            </div>
        </div>

        <div class="faqHeader">Clientes</div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Quero comprar um produto quais são os passos?</a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body">
                    Escolha a secção(homem, mulher) e tipo de item. Visualize o/os produto/s que lhe interessa/m. Clicando conseguirá ampliar a fotografia para ver em detalhe e a parte posterior do produto, materiais, tamanhos disponíveis, referência e preço.Selecione uma peça de roupa e adicione o artigo à Sua compra. De seguida poderá escolher entre continuar a comprar ou efetuar pedido. Se desejar continuar a comprar, irá repetir o processo, mas se escolher antes efetuar o pedido terá que se registar. Após introduzir os seus dados, verifique que estão corretos e pressione “confirmar”. Irá receber um e-mail confirmando o seu pedido. Irá receber um e-mail confirmando o seu pedido e o artigo será enviado por correio para a morada associada à conta.

                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Como recupero a minha palavra-passe?</a>
                </h4>
            </div>
            <div id="collapseSeven" class="panel-collapse collapse">
                <div class="panel-body">
                    Caso se tenha esquecido da sua palavra-passe, poderá recuperá-la na secção de autenticação. Irá receber um e-mail com a sua nova palavra-passe.
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
