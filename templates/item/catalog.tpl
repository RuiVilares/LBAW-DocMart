{include file='common/header.tpl'}
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

                {foreach from=$items item=itemV}
                <div class="col-sm-4 col-lg-4 col-md-4">
                  <div class="thumbnail">
                    <img src="./img/{$itemV.caminho_da_fotografia}" class="img-500" alt="{$itemV['nome']}" style="width: auto;height: 25em;">
                    <div class="caption">
                      <h4 class="pull-right">€{$itemV['preco']}</h4>
                      <h4><a href="pages/item/item.php?id={$itemV['id']}">{$itemV['nome']}</a>
                      </h4>
                      <p class="item-short-description">{$itemV['descricao']}</p>
                    </div>
                    <div class="ratings">
                      <p class="pull-right">{$itemV['count']} avaliações</p>
                      <p>
                        {for $foo=1 to $itemV['avg']}
                        <span class="glyphicon glyphicon-star"></span>
                        {/for}
                        {for $foo=$itemV['avg'] to 4}
                        <span class="glyphicon glyphicon-star-empty"></span>
                        {/for}
                      </p>
                    </div>
                  </div>
                </div>
                {/foreach}

            </div>

        </div>

    </div>

</div>
{include file='common/footer.tpl'}
