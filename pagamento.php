<!DOCTYPE html>
<html>

<head>
  <meta charset="UFT-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta lang="PT-BR">
  <title>Cadastrar pagamento</title>
  <link rel="sortcut icon" href="logo-portal.png" type="image/png" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
  <link rel="stylesheet" href="payment.css">
</head>

<body>

  <form action = "" method = "POST">>
    <div class="dropdown">
      <select name="select">
        <option value="boleto">Boleto</option>
        <option value="cartao" selected>Cartão de Crédito</option>
      </select>
    </div>

    <div class="col-md-6 mb-3">
      <label for="cc-nome">Nome no cartão</label>
      <input type="text" class="form-control" id="cc-nome" placeholder="" required="">
      <small class="text-muted">Nome completo, como mostrado no cartão.</small>
      <div class="invalid-feedback">
        O nome que está no cartão é obrigatório.
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="cc-numero">Número do cartão de crédito</label>
      <input type="text" class="form-control" id="cc-numero" placeholder="" required="">

    </div>
    <div class="row">
      <div class="col-md-3 mb-3">
        <label for="cc-expiracao">Data de expiração</label>
        <input type="text" class="form-control" id="cc-expiracao" placeholder="" required="">
        <div class="invalid-feedback">
          Data de expiração é obrigatória.
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="cc-cvv">CVV</label>
        <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
        <div class="invalid-feedback">
          Código de segurança é obrigatório.
        </div>
      </div>
    </div>
  </form>
</body>

</html>