<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <title>Sou Calouro</title>
    <?php
    function atualizardados($dadonovo,$nomenobanco,$tabledobanco,$localizacao)
    {
      $tipo = $_SESSION['tipo'];
      $host = "localhost";
		  $user = "root";
		  $pass = "";
      $dbname = "calouros";
        
      $conn = mysqli_connect($host,$user,$pass);
			//selecionando banco
		  $db = mysqli_select_db($conn, $dbname);
			//modificação para caracteres especiais
      mysqli_set_charset($conn, 'utf8');

      if($dadonovo == $_SESSION[$nomenobanco] || $dadonovo == null)
      {

      }
      else
      {
        $iduser = $_SESSION['id'];
        $comando = "UPDATE $tabledobanco SET $nomenobanco = '$dadonovo'  where $localizacao = '$iduser'";
        $atualizar = mysqli_query($conn, $comando);
      if($atualizar)
      {
        $_SESSION[$nomenobanco] = $dadonovo;
      }
      }
      mysqli_close($conn);
    }
         $nome = $_SESSION['nome'];
         $curso = $_SESSION['curso'];
         $email = $_SESSION['email'];
         $senha = $_SESSION['password'];

         if(isset($_POST['mudar']))
         {
           atualizardados($_POST['nome'],"nome","alunos","id_usuario");
           atualizardados($_POST['curso'],"curso","alunos","id_usuario");
           atualizardados($_POST['email'],"email","users","id");
           atualizardados($_POST['email'],"email","users","id");

         }

    ?>

</head>
<body>
<div class="container" style="padding-top: 60px;">
  <h1 class="page-header">Edit Profile</h1>
  <div class="row">
    <!-- left column -->
    
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      <h3>Personal info</h3>
      <form class="form-horizontal" role="form" action="" method="post">
        <div class="form-group">
          <label class="col-lg-3 control-label">Nome:</label>
          <div class="col-lg-8">
            <input class="form-control" placeholder="<?php echo"$nome"; ?>" type="text" name='nome'>
          </div>
        </div>  
        <div class="form-group">
          <label class="col-lg-3 control-label">Curso:</label>
          <div class="col-lg-8">
            <input class="form-control" placeholder="<?php echo"$curso"; ?>" type="text" name='curso'>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Email:</label>
          <div class="col-lg-8">
            <input class="form-control" placeholder="<?php echo"$email"; ?>" type="text" name='email'>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Período:</label>
          <div class="col-lg-8">
            <div class="ui-select">
              <select class="form-control" id="periodo" name="periodo">
                  <option value="1">1º</option>
                  <option value="2">2º</option>
                  <option value="3">3º</option>
                  <option value="4">4º</option>
                  <option value="5">5º</option>
                  <option value="6">6º</option>
                  <option value="7">7º</option>
                  <option value="8">8º</option>
                  <option value="9">9º</option>
                  <option value="10">10º</option>
              </select>
            </div>
          </div>
        </div>
        
        <div class="form-group">
            <label class="col-lg-3 control-label">Você é Calouro ou Veterano:</label>
            <div class="col-lg-8"> 
              
                <input type="radio" id="tipo" name="tipo" value="Calouro">   
                <label class="texto" >Calouro</label>    
	      	    <input type="radio" id="tipo" name="tipo" value="Veterano">
             <label class="texto">Veterano</label>
            </div>

               
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Password:</label>
          <div class="col-md-8">
            <input class="form-control" value="<?php echo"$senha"; ?>" type="password" name='senha'>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Confirm password:</label>
          <div class="col-md-8">
            <input class="form-control" value="<?php echo"$senha"; ?>" type="password" name='resenha'>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            <input class="btn btn-primary" value="Save Changes" name="mudar" type="submit">
            <span></span>
            <input class="btn btn-default" value="Cancel" type="reset">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>




</body>
</html>