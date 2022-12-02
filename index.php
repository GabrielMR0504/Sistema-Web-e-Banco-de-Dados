<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<?php
	include ('conexao.php');
	if(isset($_POST['email']) || isset($_POST['senha'])) {
		
		if(strlen($_POST['email']) == 0) { //verifica se email é vazio
			echo "Preencha seu email";
		} else if(strlen($_POST['senha']) == 0) { //verifica se senha é vazio
			echo "Preencha sua senha";
		} else {
			//limpando as variavei
			$email = $mysqli->real_escape_string($_POST['email']);//tem que limpar o email pq existe uma falha no php sql injection 
			$senha = $mysqli->real_escape_string($_POST['senha']);  
			$sql_code = "SELECT * FROM cliente WHERE Email = '$email' AND Senha = '$senha'";
			$sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
			$qntd = $sql_query->num_rows;

			if($qntd == 1) {
				$usuario = $sql_query->fetch_assoc();

				if(!isset($_SESSION)) {
					session_start();
				}
				$sql_cria_venda = "INSERT INTO `venda` (`DataVenda`, `PrecoTotal`, `Endereco`, `CPFCliente`, `IDFormaPagamento`) VALUES (null,0, null, '".$usuario['CPF']."', '0') ";
				$sql_gera_venda = $mysqli->query($sql_cria_venda) or die("ESSE ERRO: " . $mysqli->error);
				
				$sqlSalvaID = $mysqli->query("SELECT * FROM venda WHERE CPFCliente = ".$usuario['CPF']." AND ID = (SELECT MAX(ID) FROM venda WHERE CPFCliente = ".$usuario['CPF'].")") or die("Falha na execução do código SQL: " . $mysqli->error);
				$ID = $sqlSalvaID->fetch_assoc();
				
				//variavel session dura por um periodo de mais ou menos 1 semana
				$_SESSION['idvenda'] = $ID['ID']; 
				$_SESSION['nome'] = $usuario['Nome'];
				$_SESSION['cpf'] = $usuario['CPF'];
				
				header("Location: loja.php");

			} else {
				echo "Usuario não encontrado.";
			}
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
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="https://cdn.freebiesupply.com/logos/large/2x/pinterest-circle-logo-png-transparent.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
				<form action = "" method = "POST">
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
                            <button type="submit" name="login" class="btn login_btn">Login</button>

                   </div>
                    </form>

				</div>
				<div class="mt-4">
					<div class="d-flex justify-content-center links" >
						<p class="signUp" >Não tem uma conta?</p><a href="registrar.php" class="ml-2">Registrar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
