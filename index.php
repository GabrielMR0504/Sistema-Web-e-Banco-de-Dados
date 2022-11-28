<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Informatica</title>
</head>
<body>
    
</body>
</html>
-->
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
              <a class="nav-link" href="#carrossel">Lançamentos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#destaque">Destaque</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#avaliacao">Avaliações</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#entrevistas">Entrevistas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#inferior">Novidades</a>
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

    <div class="destaque" id="destaque">
        <div class="container">
            <div class="row" id="destaque">
                <h3>Em Destaque</h3>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categorias
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Aventura</a>
                        <a class="dropdown-item" href="#">Romance</a>
                        <a class="dropdown-item" href="#">Comédia</a>
                    </div>
                </div>
            </div>
            <div class="row" id="imgsdestaque">
                <div class="col-12 col-lg-3 col-sm-6">
                    <a href="#"><img src="coringa.jpg"></a>
                </div>
                <div class="col-12 col-lg-3 col-sm-6">
                    <a href="#"><img src="cincopassos.jpg"></a>
                </div>
                <div class="col-12 col-lg-3 col-sm-6">
                    <a href="#"><img src="ultimato.jpg"></a>
                </div>
                <div class="col-12 col-lg-3 col-sm-6">
                    <a href="#"><img src="toystory4.jpg"></a>
                </div>
                <div class="col-12 MostrarMais"> 
                        <button class="btn btn-dark" type="submit" id="mostrar">Mostrar mais</button>
                </div>
                <div class="row">
                    <div class="avaliacoes" id="avaliacao">
                        <div class="col-12">
                            <h3>Avaliações</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-12">
                            <i class="fas fa-user-circle"></i>
                            <h5> Nome do usuário</h5>
                            <p class="usuario"><b>Avaliação:</b> Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Porro numquam alias vitae, at accusamus quo! Nihil ullam sunt, tenetur similique
                                saepe facilis quas, temporibus est fuga nemo accusantium cupiditate possimus!</p>
                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
                        </div>
                        <div class="col-sm-6 col-md-4 col-12">
                            <i class="fas fa-user-circle"></i>
                            <h5> Nome do usuário</h5>
                            <p class="usuario"><b>Avaliação:</b> Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Porro numquam alias vitae, at accusamus quo! Nihil ullam sunt, tenetur similique
                                saepe facilis quas, temporibus est fuga nemo accusantium cupiditate possimus!</p>
                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
                        </div>
                        <div class="col-sm-6 col-md-4 col-12">
                            <i class="fas fa-user-circle"></i>
                            <h5> Nome do usuário</h5>
                            <p class="usuario"><b>Avaliação:</b> Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Porro numquam alias vitae, at accusamus quo! Nihil ullam sunt, tenetur similique
                                saepe facilis quas, temporibus est fuga nemo accusantium cupiditate possimus!</p>
                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
                        </div>
                    </div>
                    <div class="col-12 MostrarMais"> 
                        <button class="btn btn-dark" type="submit" id="mostrar">Mostrar mais</button>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="entrevistas" id="entrevistas">
        <div class="container">
            <div class="row">
                <h3>Entrevistas e Making-of</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <iframe width="100%" src="https://www.youtube.com/embed/0HEvyxNJRks"
                        allow="accelerometer;autoplay;encrypted-media;gyroscope;picture-in-picture" frameborder="0"
                        allowfullscreen>
                    </iframe>
                    <h4>Aquaman</h4>
                    <p>Diretor : James Wan</p>
                    <p>Data : 13 de dezembro de 2018</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <iframe width="100%" src="https://www.youtube.com/embed/BC1dUtTVa6Q"
                        allow="accelerometer;autoplay;encrypted-media;gyroscope;picture-in-picture" frameborder="0"
                        allowfullscreen>
                    </iframe>
                    <h4>Senhor dos Anéis</h4>
                    <p>Diretor : Peter Jackson</p>
                    <p>Data : 1 de janeiro de 2002</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <iframe width="100%" src="https://www.youtube.com/embed/R0CQyRq_X9U"
                        allow="accelerometer;autoplay;encrypted-media;gyroscope;picture-in-picture" frameborder="0"
                        allowfullscreen>
                    </iframe>
                    <h4>Resgate</h4>
                    <p>Diretor : Sam Hargrave</p>
                    <p>Data : 24 de abril de 2020</p>
                </div>
                <div class="col-12 MostrarMais"> 
                    <button class="btn btn-dark" type="submit" id="mostrar">Mostrar mais</button>
            </div>
            </div>
        </div>
    </div>

    <div class="container" id="inferior">
        <div class="row">
            <div class="col-lg-6 col-12">
                <h3>Novidades</h3>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="frozen2.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Frozen 2</h5>
                                <p class="card-text">De volta à infância de Elsa e Anna, as duas garotas descobrem uma história do pai, quando ainda era príncipe de Arendelle. Ele conta às meninas a história de uma visita à floresta dos elementos, onde um acontecimento inesperado teria provocado a separação dos habitantes da cidade com os quatro elementos fundamentais: ar, fogo, terra e água. Esta revelação ajuda Elsa a compreender a origem de seus poderes.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="coringa.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Coringa</h5>
                                <p class="card-text">Isolado, intimidado e desconsiderado pela sociedade, o fracassado comediante Arthur Fleck inicia seu caminho como uma mente criminosa após assassinar três homens em pleno metrô. Sua ação inicia um movimento popular contra a elite de Gotham City, da qual Thomas Wayne é seu maior representante.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="toystory4.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Toy Story 4</h5>
                                <p class="card-text">Woody, Buzz Lightyear e o resto da turma embarcam em uma viagem com Bonnie e um novo brinquedo chamado Forky. A aventura logo se transforma em uma reunião inesperada quando o ligeiro desvio que Woody faz o leva ao seu amigo há muito perdido, Bo Peep.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
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
            </div>
        </div>
    </div>


        <footer>
            <p class="footer">Copyright 2020 - Disciplina de Desenvolvimento de Interfaces Web - PUC Minas</p>
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