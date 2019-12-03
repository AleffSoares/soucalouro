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
<?php

   
      echo "Ola mundo";
      		//tipo de erros
		$campovazio=false;
		$senhaimcompativel=false;
		$cadastrado=false;
        $alunocadastrado=false;
        $jacadastrado=false;
      if(isset($_POST['cadastrarbtn']))
      {

        if($_POST['tipo'] == 'Calouro') 
        {
            $campovazio=false;
            $senhaimcompativel=false;
            $cadastrado=false;
            $alunocadastrado=false;
            $jacadastrado=false;
            
            $host = "localhost";
            $user = "root";
            $pass = "";
            $dbname = "calouros";

            $nome=$_POST['nome'];
            $email=$_POST['mail'];
            $telefone=$_POST['celular'];
            $cpass=$_POST['cpass'];
            $recpass=$_POST['recpass'];
            $tipo=$_POST['tipo'];
            $curso=$_POST['curso'];
            $periodo=$_POST['periodo'];
            $disciplina=$_POST['nome_disciplina'];
            
            
            if($nome == null){$campovazio=true;} 
            if($email == null){$campovazio=true;} 
            if($telefone == null){$campovazio=true;} 
            if($cpass == null){$campovazio=true;} 
            if($recpass == null){$campovazio=true;} 
            if($tipo == null){$campovazio=true;} 
            if($curso == null){$campovazio=true;} 
            if($periodo == null){$campovazio=true;} 
            if($disciplina == null){$campovazio=true;} 

            if($cpass != $recpass ) 
            {
                $senhaimcompativel= true;
            }
        

                //conectando ao banco
            $conn = mysqli_connect($host,$user,$pass);
                //selecionando banco
            $db = mysqli_select_db($conn, $dbname);
                //modificação para caracteres especiais
            mysqli_set_charset($conn, 'utf8');
                
            $buscaaluno = mysqli_query($conn,"SELECT * FROM users WHERE email LIKE '%$email%'");
            
                    //numero de resultados
            $numaluno=mysqli_num_rows($buscaaluno);
            
            if($numaluno != 0 ) {
                $jacadastrado = true;
            }
    
            if($campovazio == false & $senhaimcompativel == false & $jacadastrado ==  false ) {
                $cadusers = mysqli_query($conn,"INSERT INTO users (email, password) VALUES ('$email','$cpass')");
                $buscausuario =  mysqli_query($conn,"SELECT * FROM users WHERE email LIKE '$email'");
                $users = mysqli_fetch_array($buscausuario);
                $idusers = $users['id'];
                $cadalunos = mysqli_query($conn,"INSERT INTO alunos (nome, periodo, curso, telefone,  id_usuario) VALUES ('$nome','$periodo','$curso','$telefone','$idusers')");

                $buscaaluno =  mysqli_query($conn,"SELECT * FROM alunos WHERE id_usuario LIKE '$idusers'");
                $alunos = mysqli_fetch_array($buscaaluno);
                $idaluno = $alunos['id'];
                $cadtipousers = mysqli_query($conn,"INSERT INTO tipousers (tipo, id_aluno) VALUES ('$tipo','$idaluno')");

                $buscatipo =  mysqli_query($conn,"SELECT * FROM tipousers WHERE id_aluno LIKE '$idaluno'");
                $disciplinas = mysqli_fetch_array($buscatipo);
                $tipoaluno = $disciplinas['id'];
                $caddisciplinas = mysqli_query($conn,"INSERT INTO disciplinas (nome_disciplina, id_tipo) VALUES ('$disciplina','$tipoaluno' )");
            
    
            }

        }
        elseif($_POST['tipo'] == 'Veterano') 
        {
            $campovazio=false;
            $senhaimcompativel=false;
            $cadastrado=false;
            $alunocadastrado=false;
            $jacadastrado=false;
            
            $host = "localhost";
            $user = "root";
            $pass = "";
            $dbname = "calouros";

            $nome=$_POST['nome'];
            $email=$_POST['mail'];
            $telefone=$_POST['celular'];
            $cpass=$_POST['cpass'];
            $recpass=$_POST['recpass'];
            $tipo=$_POST['tipo'];
            $curso=$_POST['curso'];
            $periodo=$_POST['periodo'];
            $disciplina=$_POST['nome_disciplina'];
            
            
            if($nome == null){$campovazio=true;} 
            if($email == null){$campovazio=true;} 
            if($telefone == null){$campovazio=true;} 
            if($cpass == null){$campovazio=true;} 
            if($recpass == null){$campovazio=true;} 
            if($tipo == null){$campovazio=true;} 
            if($curso == null){$campovazio=true;} 
            if($periodo == null){$campovazio=true;} 
            if($disciplina == null){$campovazio=true;} 

            if($cpass != $recpass ) 
            {
                $senhaimcompativel= true;
            }
        

                //conectando ao banco
            $conn = mysqli_connect($host,$user,$pass);
                //selecionando banco
            $db = mysqli_select_db($conn, $dbname);
                //modificação para caracteres especiais
            mysqli_set_charset($conn, 'utf8');
                
            $buscaaluno = mysqli_query($conn,"SELECT * FROM users WHERE email LIKE '%$email%'");
            
                    //numero de resultados
            $numaluno=mysqli_num_rows($buscaaluno);
            
            if($numaluno != 0 ) {
                $jacadastrado = true;
            }
            if($campovazio == false & $senhaimcompativel == false & $jacadastrado ==  false ) {
                $cadusers = mysqli_query($conn,"INSERT INTO users (email, password) VALUES ('$email','$cpass')");
                $buscausuario =  mysqli_query($conn,"SELECT * FROM users WHERE email LIKE '$email'");
                $users = mysqli_fetch_array($buscausuario);
                $idusers = $users['id'];
                $cadalunos = mysqli_query($conn,"INSERT INTO alunos (nome, periodo, curso, telefone,  id_usuario) VALUES ('$nome','$periodo','$curso','$telefone','$idusers')");

                $buscaaluno =  mysqli_query($conn,"SELECT * FROM alunos WHERE id_usuario LIKE '$idusers'");
                $alunos = mysqli_fetch_array($buscaaluno);
                $idaluno = $alunos['id'];
                $cadtipousers = mysqli_query($conn,"INSERT INTO tipousers (tipo, id_aluno) VALUES ('$tipo','$idaluno')");
            }

        }
    }
    header('location: ../view/index.php');
    
?>






<?php mysqli_close($conn) ?>
</body>
</html>