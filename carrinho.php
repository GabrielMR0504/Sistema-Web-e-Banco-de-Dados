<?php
include('protect.php');
include('conexao.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta lang="PT-BR">
    <title>Loja de Informática</title>
    <link rel="sortcut icon" href="logo-portal.png" type="image/png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="portal.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styleLogin.css" media="screen" />
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
                <li class="nav-item">
                    <a class="nav-link" href="#carrossel">Promocões</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#inferior">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Autores">Autores</a>
                </li>
            </ul>
        </div>
        <form class="form-inline" action="/action_page.php">
            <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar">
            <button class="btn btn-light" type="submit" id="botaopesquisa">Pesquisar</button>
        </form>
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    </div>

    <!-- ITENS -->
    <?php
    $sql_code = "SELECT * FROM item";
    $sql_query = $mysqli->query($sql_code) or die("Erro ao consultar catálogo de produtos! " . $mysqli->error);
    $qnt = $sql_query->num_rows;
    ?>
    <div class="container" id="inferior">
        <div class="row">
            <div class="col-lg-12 col-12" >
                <h3>Produtos</h3>
                <div class="d-flex justify-content-center mt-3 login_container" style="margin-left: 1005px">
                    <button type="submit" name="registrar" class="btn login_btn">Pagar</button>
                </div>
                <!-- FAZER UM IF COM ALGO COMO NADA CADSTRADO SE NAO TIVER ITENS-->
                <?php
                if ($qnt < 1) {
                ?>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-lg-12">
                                <div class="card-body">
                                    <h5 class="card-title">Não há produtos no carrinho</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- else aqui-->
                    <?php
                } else {
                    while ($dados = $sql_query->fetch_assoc()) {
                    ?>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-lg-12">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $dados['Nome']; ?></h5>
                                        <p class="card-text">Quantidade: <?php echo $dados['Quantidade']; ?></p>
                                        <p class="card-text">R$ <?php echo $dados['PrecoItem']; ?>,00</p>
                                        <p class="card-text">Id do produto: <?php echo $dados['IDProduto']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
                
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>