<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html> -->

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
    <link rel="sortcut icon" href="Imagens/logo_loja.png" type="image/png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="loja.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="loja.php">
            <img src="Imagens/logo_loja.png" alt="Logo" style="width:60px;">
        </a>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="loja.php">Promocões</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="loja.php">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="loja.php">Autores</a>
                </li>
            </ul>
        </div>
        <form action="">
            <input name="busca" placeholder="Pesquisar" type="text">
            <button class="btn btn-light" type="submit">Pesquisar</button>
</form>
</body>
