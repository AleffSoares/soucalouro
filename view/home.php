<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/app.css" rel="stylesheet">
    <link href="../css/calouro.css" rel="stylesheet">
    <link href="../css/teste.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <title>Sou Calouro</title>
    <?php 
                    /* esse bloco de código em php verifica se existe a sessão, pois o usuário pode
                    simplesmente não fazer o login e digitar na barra de endereço do seu navegador 
                    o caminho para a página principal do site (sistema), burlando assim a obrigação de 
                    fazer um login, com isso se ele não estiver feito o login não será criado a session, 
                    então ao verificar que a session não existe a página redireciona o mesmo
                    para a index.php.*/
            session_start();
            if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['password']) == true))
            {
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            header('location:index.php');
            }
            
            $logado = $_SESSION['email'];
            $nome = $_SESSION['nome'];
            
           
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
    <?php
    $visibilidadecarro = '';
         if($_SESSION['tipo'] == 'Calouro') 
         {
          $visibilidadecarro = "style='display:none'; ";
         }
         else
         {

         }

    ?>
    <?php
    $visibilidadesection = '';
         if($_SESSION['tipo'] == 'Veterano') 
         {
          $visibilidadesection = "style='display:none'; ";
         }
         else
         {

         }

    ?>


    <div  class="caixa" <?php echo $visibilidadecarro ?> >
      <section id="home" class="d-flex caixa " > <!-- home -->
        <div class="container align-self-center"> <!-- container-->
           <div class="row"> <!-- row-->
              <div class="col-md-12 capa">
                 <div  id="carousel-spotify" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">

                       <div class="carousel-item active">
                           <h1 class="fonte">Seja bem-vindo</h1>
                           <h2 class="fonte"> <?php  echo"$nome"; ?></h3>
                       </div>


                       <div class="carousel-item ">
                           <h1 class="fonte">Seja um voluntário ! </h1>
                           <h2 class="fonte">Você aluno Veterano, participe  do projeto adote um calouro.</h2>
                           <p>Objetivo é auxiliar os alunos Calouros nas disiciplinas que eles têm dificuldade.</p>
                           <a href="teste2.php" class="btn  btn-lg btn-dark">
                             <i class="far fa-address-card"></i> Saiba mais.
                           </a>
                       </div>

                    </div>
                    <!-- Controles-->
                    <a href="#carousel-spotify" class="carousel-control-prev" data-slide="prev">
                       <i class="fas fa-angle-left fa-3x"></i>
                    </a>

                    <a href="#carousel-spotify" class="carousel-control-next" data-slide="next">
                       <i class="fas fa-angle-right fa-3x"></i>
                    </a>
                 </div>
              </div>
           </div>
        </div>
      </section> 
    </div>


<section  class="caixa2">
    <div class="container mt-4 mb-0">
       <div class="row">
          <div class="col-md-6 d-none d-md-block">
             <div class="row albuns">
               <div class="col-md-6">
                 <img src="../img/img1.jpg" class="img-fluid">
               </div>
              <div class="col-md-6">
                 <img src="../img/img2.jpg" class="img-fluid">
              </div>
             </div>
             <div class="row albuns">
                <div class="col-md-6">
                    <img src="../img/img3.jpg" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <img src="../img/img4.jpg" class="img-fluid">
                </div>
             </div>
          </div>
          
          <div class="col-md-6">
             <h2>O que posso encontrar no <br>"Sou Calouro" ?</h2>

             <h3>O futuro do mercado de TI</h3>
             <p>
                No Sou Calouro você encontra  as novidades do mercado de TI.
             </p>

             <h3>Informações sobre cursos e eventos na área de TI.</h3>
             <p>
                No Sou Calouro você encontra  informações sobre cursos e eventos na área de TI.
             </p>

             <h3>Interações dos alunos veteranos com os calouros.</h3>
             <p>
                No Sou Calouro os alunos veteranos terão interações com alunos calouros cadastrados, pois no sistema será
                possivel  que o aluno veterano  adote um calouro para realizar interações e auxiliar esses alunos  nas disciplinas que eles estão tendo 
                dificuldade. 
             </p>
          </div>
       </div>
    </div>
  </section>

  <section id="servicos" <?php echo $visibilidadesection ?> >
      
         <div id="card" class="row">
            
            <div class="col-md-6 d-none d-md-block card1" >
                    <h1>Dependência do mercado de TI</h1>
                    <h5>o que é Internet das Coisas (IoT)? </h5>
                    <div class="row">
                            <div class="col-md-12 card1">
                                   
                                    <div class="card">
                                            <img src="../img/iot.png" class="card-img-top" alt="...">
                                            <div class="card-body">
                                             
                                              <h3 class="card-title">Internet das Coisas </h3>
                                              <p class="card-text" style="font-size: 18px;">
                                                    Internet das Coisas é o modo como os objetos físicos estão conectados e se comunicando entre si e com o usuário, através de sensores inteligentes e softwares que transmitem dados para uma rede. Como se fosse um grande sistema nervoso que possibilita a troca de informações entre dois ou mais pontos.

                                                    O resultado disso é um planeta mais inteligente e responsivo. Agora podemos entender melhor como essas coisas funcionam, e como funcionam juntas para melhor nos servir.
 
                                              </p>
                                              <a href="#" class="btn btn-primary" target="_blank">Saiba mais</a>
                                            </div>
                                    </div>
                             </div>
                                   
                               
                      </div>

                            
              </div> <!-- FIM !-->


                    <div class="col-md-6 d-none d-md-block card1" >
                        <h1>Futuro da tecnologia</h1>
                        <h5>o que é Inteligência Artificial? </h3>
                        <div class="row">
                              <div class="col-md-12 card1">
                                    
                                      <div class="card">
                                              <img src="../img/it.jpg" class="card-img-top" alt="...">
                                              <div class="card-body">
                                                <h3 class="card-title">Inteligência Artificial</h3>
                                                <p class="card-text" style="font-size: 18px;">
                                                  Originalmente, a IA é uma disciplina da engenharia da computação. Atualmente, podemos dizer que se trata de uma tecnologia que procura simular o processo humano de aprendizado e tomada de decisões. Com base em um montante de dados, a IA é capaz de fazer previsões através de machine learning, redes neurais e outras técnicas relacionadas.
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