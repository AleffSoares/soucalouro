<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/app.css" rel="stylesheet">
    <link href="../css/calouro.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <title>Sou Calouro</title>
    <?php 
       session_start();
       $logado = $_SESSION['email'];

    ?>


</head>
<body>
<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-dark cyan">
        <a href="#" class="navbar-brand">Sou Calouro</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="home.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="atividades.php" class="nav-link">Atividades</a>
                </li>
                <li class="nav-item">
                    <a href="profile.php" class="nav-link">Profile</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                        <?php
                           echo"$logado";
                        ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="../controller/logout.php"class="dropdown-item cyan">Logout</a>
                    </div>
                </li>
			</ul>
        </div>
    </nav>
</div>

<section  class="caixa2">
       
       <div id="card" class="row">
            
            <div class="col-md-6 d-none d-md-block card1" style="border-right: 1px solid;">
                    <h1>Eventos</h1>
                    <h5>Os principais eventos  que vão acontencer na capital Amazonense no mês de novembro e dezembro. </h3>
                    <div class="row">
                            <div class="col-md-12 card1">
                                   
                                    <div class="card">
                                            <img src="../img/word.jpeg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                              <h3 class="card-title">Workshop de Empregabilidade </h3>
                                              <p class="card-text" style="font-size: 18px;">
                                                     Workshop de Empregabilidade.
                                              </p>
                                              <a href="#" class="btn btn-primary" target="_blank">Saiba mais</a>
                                            </div>
                                    </div>
                                </div>
                                   
                               
                            </div>

                            
                    </div> <!-- FIM !-->


                    <div class="col-md-6 d-none d-md-block card1" style="border-right: 1px solid;">
                    <h1>Cursos</h1>
                    <h5>Os principais eventos  que vão acontencer na capital Amazonense no mês de novembro e dezembro. </h3>
                    <div class="row">
                            <div class="col-md-12 card1">
                                   
                                    <div class="card">
                                            <img src="../img/scrum.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                              <h3 class="card-title">Scrum Master (Manaus)</h3>
                                              <p class="card-text" style="font-size: 18px;">
                                                     O Curso de Formação de Scrum Master é uma verdadeira formação profissional. O aluno vai aprender desde os fundamentos básicos do Scrum, passando por toda a parte de aplicação prática no dia-a-dia até como conseguir novas oportunidades profissionais na área.
                                              </p>
                                              <a href="https://www.sympla.com.br/scrum-master-manaus__688475" class="btn btn-primary" target="_blank">Saiba mais</a>
                                            </div>
                                    </div>
                                </div>
                                
                                   
                                        
                            </div>

                            
                    </div> <!-- fim curso !-->
            </div>
       
          


</section>

<footer>
      <div class="container">
         <h5>© 2019  Sou Calouro - All rights reserved</h3>
      </div>
  </footer>

</body>
</html>