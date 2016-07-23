{include file='common/header.tpl'}
<!-- Page Content -->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 container">
  <div class='col-sm-2 col-md-2 col-lg-4'></div>
  <div class='col-xs-12 col-sm-8 col-md-8 col-lg-4'>
    <div class='row'>
      <div class='col-xs-12 form-group'>
        <label class='control-label'>Nome no Cartão</label>
        <input id="cardName" class='form-control' size='4' type='text' required>
      </div>
    </div>
    <div class='row'>
      <div class='col-xs-12 form-group'>
        <label class='control-label'>Número de Cartão</label>
        <input id="cardNumber" autocomplete='off' class='form-control card-number' size='20' type='text' required>
      </div>
    </div>
    <div class='row'>
      <div class='col-xs-12 col-sm-6 col-md-4 col-lg-4 form-group'>
        <label class='control-label'>CVC</label>
        <input id="CVC" autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text' required>
      </div>
      <div class='col-xs-12 col-sm-6 col-md-4 col-lg-4 form-group'>
        <label class='control-label'>Válido até</label>
        <input id="expirationMonth" class='form-control card-expiry-month' placeholder='MM' size='2' type='text' required>
      </div>
      <div class='col-xs-12 col-sm-6 col-md-4 col-lg-4 form-group'>
        <label class='control-label'> </label>
        <input id="expirationYear" class='form-control card-expiry-year' placeholder='AAAA' size='4' type='text' required>
      </div>
    </div>
    <div class='row'>
      <div class='col-xs-12 form-group'>
        <div id="buyTotal" data-onload="buyTotal()" class='form-control total btn btn-info'></div>
      </div>
    </div>
    <div class='row'>
      <div class='col-xs-12 form-group'>
        <button class='form-control btn btn-default submit-button' onclick="buy()">Pagamento</button>
      </div>
    </div>
  </div>
  <div class='col-sm-2 col-md-2 col-lg-4'></div>
</div>
{include file='common/footer.tpl'}
