<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/app.css" rel="stylesheet">
    <link href="../css/calouro.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">
    <link  href="../css/navbar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>
    <title>Sou Calouro</title>

</head>
<body>
<header> <!-- Inicio do cabeçalho-->
    <nav class="mb-4 navbar navbar-expand-lg navbar-dark cyan">
       <a class="navbar-brand font-bold" href="#">Sou Calouro</a> 
    </nav>
</header>   
<section id="inicial" class="caixa">
        <div class="container">
           <div class="row align-items-center">
              <div class="col-md-9 d-none d-md-block">
                 <div class="align-self-center">
                    <h1 class="display-5 font-italic"> Seja bem-vindo ao site <strong>SOU CALOURO</strong>.</h1>
                    <p>
                         O Sou Calouro é uma ferramenta online que vai facilitar sua vida acadêmica.
                    </p>
                 </div>
              </div>
              <div class="col-md-3" style="margin-bottom:30px;">
                  <div id="wrapper" class="m-1 p-1">
                           <!--SLIDE-IN ICONS-->
                          
                           <!--LOGIN FORM-->
                      <form name="login-form" class="login-form" action="" method="post">
                           
                              <!--HEADER-->
                         <div class="header">
                           <!--TITLE--><h1>Login </h1><!--END TITLE-->
                           <!--DESCRIPTION--><span>Preencha o formulário abaixo para acessar o painel Sou Calouro.</span><!--END DESCRIPTION-->
                         </div>
                           <!--END HEADER-->
                            <!--CONTENT-->
                         <div class="content">
                             <!--USERNAME--><input name="email" type="email" class="input username" placeholder="E-mail" /><!--END USERNAME-->
                             <!--PASSWORD--><input name="password" type="password" class="input password" placeholder="Password"  /><!--END PASSWORD-->
                          </div>
                             <!--END CONTENT-->
                             <!--FOOTER-->
                           <div class="footer">
                             <!--LOGIN BUTTON--><input type="submit"  formaction="../controller/open.php" name="login" value="Login" class="button" /><!--END LOGIN BUTTON-->
                                             
                           <!--REGISTER BUTTON--><input type="submit" formaction="registros.php" name="submit" value="Registrar" class="register"><!--END REGISTER BUTTON-->
                                          
                                           
                           </div>
                             <!--END FOOTER-->
                       </form>
                   </div>
                </div>
           </div>
          </div>
</section>

<footer>
      <div class="container">
         <h5>© 2019  Sou Calouro - All rights reserved</h3>
      </div>
</footer>

     <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

    
</body>
</html>