<?php
	include ('protect.php');
  include('conexao.php');
//echo $_SESSION['nome'];
if(isset($_POST['tipo']) || isset($_POST['nome']) || isset($_POST['numero']) || isset($_POST['dataExp']) || isset($_POST['cvv']) || isset($_POST['cpf'])) {
        //limpando as variavei
        $tipo = $mysqli->real_escape_string($_POST['tipo']);
        $nome = $mysqli->real_escape_string($_POST['nome']);
        $numero = $mysqli->real_escape_string($_POST['numero']);
        $dataexp = $mysqli->real_escape_string($_POST['dataexp']);
        $cvv = $mysqli->real_escape_string($_POST['cvv']);
        $cpf = $_SESSION['cpf'];
        $sql_code = $mysqli->prepare("INSERT INTO `formapagamento` (`Tipo`, `Nome`, `Numero`, `DataExp`, `CVV`) VALUES (?,?,?,?,?)");
        $sql_code->bind_param("ssssss", $tipo, $nome, $numero, $dataexp, $cvv);
        $sql_code->execute(); 

        //$sql_codeVenda = $mysqli->prepare("UPDATE TABLE `venda` SET (`Tipo`, `Nome`, `Numero`, `DataExp`, `CVV`) VALUES (?,?,?,?,?)");
        //$sql_code->bind_param("ssssss", $tipo, $nome, $numero, $dataexp, $cvv);
        //echo "Registro concluído";
        //$sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
        header("Location: carrinho.php");
}
?>

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
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">
            <img src="logo-portal.png" alt="Logo" style="width:60px;">
        </a>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
            </ul>
        </div>
        <!-- Toggler/collapsibe Button -->
    </nav>


  <form action = "" method = "POST">
    <div class="dropdown">
      <h4 class="mb-3">Pagamento</h4>
      <select name="tipo">
        <option value="debito">Cartão de debito</option>
        <option value="credito" selected>Cartão de Crédito</option>
      </select>
    </div>
    <div class="col-md-6 mb-3">
      <label for="cc-nome">Nome no cartão</label>
      <input type="text" name="nome" class="form-control" id="cc-nome" placeholder="" required="">
      <small class="text-muted">Nome completo, como mostrado no cartão.</small>
      <div class="invalid-feedback">
        O nome que está no cartão é obrigatório.
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="cc-numero">Número do cartão de crédito</label>
      <input type="text" name="numero" class="form-control" id="cc-numero" placeholder="" required="">

    </div>
    <div class="row">
      <div class="col-md-3 mb-3">
        <label for="cc-expiracao">Data de expiração</label>
        <input type="text" name="dataexp" class="form-control" id="cc-expiracao" placeholder="" required="">
        <div class="invalid-feedback">
          Data de expiração é obrigatória.
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="cc-cvv">CVV</label>
        <input type="text" name="cvv" class="form-control" id="cc-cvv" placeholder="" required="">
        <div class="invalid-feedback">
          Código de segurança é obrigatório.
        </div>
      </div>
      <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar compra</button>
    </div>
  </form>
</body>

</html>