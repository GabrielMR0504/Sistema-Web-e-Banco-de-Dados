<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/20b93338db.js" crossorigin="anonymous"></script>
<!------ Include the above in your HEAD tag ---------->

<?php
include('conexao.php');
if (isset($_POST['email']) || isset($_POST['senha']) || isset($_POST['cpf']) || isset($_POST['nome']) || isset($_POST['endereco']) || isset($_POST['idade'])) {

    if (strlen($_POST['cpf']) == 0) { //verifica se senha é vazio
        echo "Preencha sua cpf";
    } else if (strlen($_POST['nome']) == 0) { //verifica se senha é vazio
        echo "Preencha sua nome";
    } else if (strlen($_POST['idade']) == 0) { //verifica se senha é vazio
        echo "Preencha sua idade";
    } else if (strlen($_POST['email']) == 0) { //verifica se email é vazio
        echo "Preencha seu email";
    } else if (strlen($_POST['endereco']) == 0) { //verifica se senha é vazio
        echo "Preencha sua endereco";
    } else if (strlen($_POST['senha']) == 0) { //verifica se senha é vazio
        echo "Preencha sua senha";
    } else {
        //limpando as variavei
        $cpf = $mysqli->real_escape_string($_POST['cpf']);
        $nome = $mysqli->real_escape_string($_POST['nome']);
        $idade = $mysqli->real_escape_string($_POST['idade']);
        $endereco = $mysqli->real_escape_string($_POST['endereco']);
        $email = $mysqli->real_escape_string($_POST['email']); //tem que limpar o email pq existe uma falha no php sql injection 
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = $mysqli->prepare("INSERT INTO `cliente` (`CPF`, `Nome`, `Idade`, `Endereco`, `Email`, `Senha`) VALUES (?,?,?,?,?,?)");
        $sql_code->bind_param("ssisss", $cpf, $nome, $idade, $endereco, $email, $senha);
        $sql_code->execute() or die("" . $mysqli->error); 
        echo "Registro concluído";

       //$sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>My Awesome Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styleLogin.css" media="screen" />
    
</svg>
</head>
<!--Coded with love by Mutiullah Samim-->

<body>
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="Imagens/logo2.png" class="brand_logo" alt="Logo">
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container">
                    <form action="" method="POST">
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="cpf" class="form-control input_user" value="" placeholder="Cpf">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="nome" class="form-control input_user" value="" placeholder="Nome">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="idade" class="form-control input_user" value="" placeholder="Idade">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-house"></i></span>
                            </div>
                            <input type="text" name="endereco" class="form-control input_user" value="" placeholder="Endereço">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="email" class="form-control input_user" value="" placeholder="Email">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="senha" class="form-control input_pass" value="" placeholder="password">
                        </div>
                        <div class="d-flex justify-content-center mt-3 login_container">
                            <button type="submit" name="registrar" class="btn login_btn">Registrar</button>

                        </div>
                    </form>

                </div>
                <div class="mt-4">
					<div class="d-flex justify-content-center links" >
						<p class="signUp" ><a href="index.php" class="ml-2">Voltar para o login</a></p>
					</div>
				</div>
            </div>
        </div>
    </div>
</body>

</html>