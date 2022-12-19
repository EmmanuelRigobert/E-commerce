<?php
    ob_start();
    // include header.php file
    include ('header.php');
?>
<div class="container">
    <h2>Choose the form of payment:</h2>

    <form>

      <!-- Nav tabs -->
      <ul class="nav nav-tabs nav-justified" id="paymentMethods" role="tablist">
        <li role="presentation" id="presBoleto">
          <a href="#tabBoleto" aria-controls="tabBoleto" role="tab" data-toggle="tab">
      Bill -
    </a>
        </li>
        <li role="presentation" id="presOnline_debit">
          <a href="#tabOnline_debit" aria-controls="tabOnline_debit" role="tab" data-toggle="tab">
       Debit Card -
    </a>
        </li>
        <li role="presentation" id="presCredit_card" class="active">
          <a href="#tabCredit_card" aria-controls="tabCredit_card" role="tab" data-toggle="tab">
      Credit Card 
    </a> 
        </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane" id="tabBoleto">
          <h3>Banks</h3>
        </div>
        <div role="tabpanel" class="tab-pane" id="tabOnline_debit">
          <h3>Available Banks</h3>
          <div id="online_debit">
            <div class="btn-group" data-toggle="buttons">
              <label class="btn btn-default">
                <input type="radio" name="bankName" value="BANCO_BRASIL"><img src="https://stc.pagseguro.uol.com.br/public/img/payment-methods-flags/68x30/bb.png"><br> Banco do Brasil
              </label>
              <label class="btn btn-default">
                <input type="radio" name="bankName" value="BANRISUL"><img src="https://stc.pagseguro.uol.com.br/public/img/payment-methods-flags/68x30/banrisul.png"><br> Banco Banrisul
              </label>
              <label class="btn btn-default">
                <input type="radio" name="bankName" value="BRADESCO"><img src="https://stc.pagseguro.uol.com.br/public/img/payment-methods-flags/68x30/bradesco.png"><br> Banco Bradesco
              </label>
              <label class="btn btn-default">
                <input type="radio" name="bankName" value="HSBC"><img src="https://stc.pagseguro.uol.com.br/public/img/payment-methods-flags/68x30/hsbc.png"><br> Banco HSBC
              </label>
              <label class="btn btn-default">
                <input type="radio" name="bankName" value="ITAU"><img src="https://stc.pagseguro.uol.com.br/public/img/payment-methods-flags/68x30/itau.png"><br> Banco Itaú
              </label>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane active" id="tabCredit_card">          

          <div class="row">
            <div class="col-sm-5">
              <h3>Available Payment Methods</h3>
              <div class="row">
                <div class="col-sm-6">
                  <ul class="list-group">
                    <li class="list-group-item"><img style="width:42px; height:20px;" src="assets/mobile-money.jpg"> Mobile Money</li>
                    <li class="list-group-item"><img style="width:42px; height:20px;" src="assets/orange-money.jpg"> Orange Money</li>
                    <li class="list-group-item"><img style="width:42px; height:20px;" src="assets/MoMo_Logo.png"> MoMo</li>
                    <li class="list-group-item"><img style="width:42px; height:20px;" src="assets/crypto.jpg"> Crypto</li>
                    <li class="list-group-item"><img style="width:42px; height:20px;" src="assets/western-union.png"> Western Union</li>
                  </ul>
                </div>
                <div class="col-sm-6">
                  <ul class="list-group">
                    <li class="list-group-item"><img src="https://stc.pagseguro.uol.com.br/public/img/payment-methods-flags/42x20/hipercard.png"> Hiper Card</li>
                    <li class="list-group-item"><img src="https://stc.pagseguro.uol.com.br/public/img/payment-methods-flags/42x20/mastercard.png"> Master Card</li>
                    <li class="list-group-item"><img src="https://stc.pagseguro.uol.com.br/public/img/payment-methods-flags/42x20/personalcard.png"> Personal Card</li>
                    <li class="list-group-item"><img src="https://stc.pagseguro.uol.com.br/public/img/payment-methods-flags/42x20/valecard.png"> VALE CARD</li>
                    <li class="list-group-item active"><img src="https://stc.pagseguro.uol.com.br/public/img/payment-methods-flags/42x20/visa.png"> Visa Card</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-7">
              <h3>Card Holder</h3>
              <div class="row">
                <div class="col-sm-7">
                  <div class="form-group">
                    <input type="text" placeholder="Account Name" class="form-control">
                  </div>
                </div>
                <div class="col-sm-5">
                  <div class="form-group">
                    <input type="text" placeholder="Email" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-5">
                  <div class="form-group">
                    <input type="text" placeholder="Date of Birth" class="form-control">
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input type="text" placeholder="Age" class="form-control">
                  </div>
                </div>
                <div class="col-sm-5">
                  <div class="form-group">
                    <input type="text" placeholder="Phone" class="form-control">
                  </div>
                </div>
              </div>
              <h3>Card Information</h3>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-10 col-xs-8">
                    <input type="text" placeholder="Card Number" class="form-control">
                  </div>
                  <div class="col-sm-2 col-xs-4" id="chosenCard">
                    <img src="https://stc.pagseguro.uol.com.br/public/img/payment-methods-flags/68x30/visa.png">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <input type="text" placeholder="CVV" class="form-control">
                  </div>
                </div>
                <div class="col-sm-2 col-xs-6">
                  <div class="form-group">
                    <input type="text" placeholder="KEY" class="form-control">
                  </div>
                </div><hr>
                <button type="submit" style="position:center;" class="btn btn-success pull-right" id="btnParcels">Finalize Purchase</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      
  </div>
  <?php
// include footer.php file
include ('footer.php');
?>