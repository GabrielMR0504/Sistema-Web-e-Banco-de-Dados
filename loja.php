
<?php
	include ('protect.php');
    include ('conexao.php');
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="portal.css">
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
    <div class="lancamentos">
        <div class="container" id="lancamentos">
            <div class="row">
                <div class="col-12">
                    <h1>Lançamentos</h1>
                </div>
                <div class="col-12">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active" id="carrossel">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-7 col-12">
                                            <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/tdwLRHGQVG8"
                                                allow="accelerometer;autoplay;encrypted-media;gyroscope;picture-in-picture"
                                                frameborder="0" allowfullscreen>
                                            </iframe>
                                        </div>
                                        <div class="col-xl-5 col-12" id="textocarrossel">
                                            <h3>Por lugares incríveis</h3>
                                            <p><b>Sinopse:</b>O enredo de Por Lugares Incríveis acompanha Violet Markey (Elle Fanning) e Theodore Finch (Justice Smith), que têm suas vidas transformadas para sempre quando se conhecem. Juntos, eles se apoiam para curar os estigmas emocionais e físicos que adquiriram no passado.</p>
                                            <p><b>Diretor: </b>Brett Haley    | <b>Ano: </b>2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" id="carrossel">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-7 col-12">
                                            <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/yeegSMOA0fk"
                                                allow="accelerometer;autoplay;encrypted-media;gyroscope;picture-in-picture"
                                                frameborder="0" allowfullscreen>
                                            </iframe>
                                        </div>
                                        <div class="col-xl-5 col-12" id="textocarrossel">
                                            <h3>Scooby! O filme</h3>
                                            <p><b>Sinopse:</b>Scooby e sua turma encaram o seu maior e mais difícil mistério de todos os tempos: um plano maligno para liberar o cão fantasma, Cérbero, no mundo. Enquanto corre para impedir esse "apocãolipse" global, a turma descobre que Scooby tem um legado secreto e um destino épico maior do que qualquer um podia imaginar.</p>
                                            <p><b>Diretor: </b>Tony Cervone    | <b>Ano: </b>2020</p>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" id="carrossel">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-7 col-12">
                                            <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/EnAJ99Q77DY"
                                                allow="accelerometer;autoplay;encrypted-media;gyroscope;picture-in-picture"
                                                frameborder="0" allowfullscreen>
                                            </iframe>
                                        </div>
                                        <div class="col-xl-5 col-12" id="textocarrossel">
                                            <h3>O Grito</h3>
                                            <p><b>Sinopse:</b>Depois que uma jovem mãe mata a família em sua própria casa, uma mãe solteira e um detetive tentam investigar e resolver o caso. Mais tarde, eles descobrem que a casa é amaldiçoada.</p>
                                            <p><b>Diretor: </b>Nicolas Pesce    | <b>Ano: </b>2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    </div>
    
    <!-- ITENS -->
    <?php
     $sql_code = "SELECT * FROM produto";
     $sql_query = $mysqli-> query($sql_code) or die("Erro ao consultar catálogo de produtos! " . $mysqli->error);
     $qnt = $sql_query->num_rows;
    ?>
    <div class="container" id="inferior">
        <div class="row">
            <div class="col-lg-6 col-12">
                <h3>Produtos</h3>
                <!-- FAZER UM IF COM ALGO COMO NADA CADSTRADO SE NAO TIVER ITENS-->
                <?php
                if($qnt < 1){
                    ?>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Não há produtos cadastrados</h5>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- else aqui-->
                <?php
                }else{
                    while($dados = $sql_query ->fetch_assoc()){
                        ?>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="Imagens/<?php echo $dados['Imagem'];?>" class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $dados['Nome'];?></h5>
                                        <p class="card-text"><small class="text-muted"><?php echo $dados['QntdVendas'];?> vendidos</small></p>
                                        <p class="card-text"><?php echo $dados['Descricao'];?></p>
                                        <p class="card-text">Marca: <?php echo $dados['Marca'];?></p>
                                        <p class="card-text">Tipo: <?php echo $dados['Tipo'];?></p>
                                        <p class="card-text">R$<?php echo $dados['Preco'];?></p>
                                        <p class="card-text"><small class="text-muted"><?php echo $dados['Estoque'];?> disponíveis</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
            <!-- <div class="col-lg-6 col-12">
                <div class="sobre">
                    <h3>Sobre</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas perferendis rerum nesciunt, a aut
                        esse
                        quod labore doloribus aliquam, incidunt adipisci architecto, totam similique eum excepturi
                        maxime
                        saepe culpa est? Tempore fugiat excepturi, aut quibusdam deserunt nulla, nemo natus doloribus
                        iusto
                        tempora temporibus quae unde quasi itaque minus! Laudantium, iusto?</p>
                </div>
                <div class="editorial">
                    <h3>Editorial</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, voluptatem sunt modi
                        assumenda
                        eveniet voluptas illo vitae rem unde necessitatibus consequuntur repellat iste repudiandae
                        reprehenderit, vel culpa repellendus at nesciunt!</p>
                </div> 
            </div>-->
        </div>
    </div>
        <footer id="Autores">
            <p class="footer">Copyright © 2022 - Banco de Dados - Jorge Hiroki - Rafael Lima - Gabriela Guerra - Gabriel de Medeiros</p>
            <img src="logo-portal.png">
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>
</body>
</html>