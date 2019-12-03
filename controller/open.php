<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/app.css" rel="stylesheet">
    <link href="..//calouro.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">
    <link  href="../css/navbar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>
    <title>Sou Calouro</title>

</head>
<body>
   <h1>Teste</h1>
   <?php
        echo "Ola mundo";

            
     if(isset($_POST['login']))
     {
        session_start();
        // as variáveis login e senha recebem os dados digitados na página anterior
        $login = $_POST['email'];
        $senha = $_POST['password'];
        // as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
        $host = "localhost";
		$user = "root";
		$pass = "";
        $dbname = "calouros";
        
        $conn = mysqli_connect($host,$user,$pass);
			//selecionando banco
		$db = mysqli_select_db($conn, $dbname);
			//modificação para caracteres especiais
        mysqli_set_charset($conn, 'utf8');
        
        
        // A variavel $result pega as varias $login e $senha, faz uma 
        //pesquisa na tabela de usuarios
        $result = mysqli_query($conn,"SELECT * FROM users WHERE email = '$login' AND password = '$senha' ");

        /* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi 
        bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
        será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do 
        resultado ele redirecionará para a página site.php ou retornara  para a página 
        do formulário inicial para que se possa tentar novamente realizar o login */
        if(mysqli_num_rows ($result) > 0 )
        {
           $user=mysqli_fetch_array($result);
            $_SESSION['id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['password'] =$user['password'];
            $result = mysqli_query($conn,"SELECT * FROM alunos WHERE id_usuario LIKE '".$_SESSION['id']."' ");
            if(mysqli_num_rows($result) >0)
            {
                $user = mysqli_fetch_array($result);
                $_SESSION['nome']= $user['nome'];
                $_SESSION['periodo']= $user['periodo'];
                $_SESSION['curso']= $user['curso'];
                $result = mysqli_query($conn,"SELECT * FROM tipousers WHERE id_aluno LIKE '".$user['id']."' ");
                if(mysqli_num_rows($result) >0)
                {
                    $user = mysqli_fetch_array($result);
                    $_SESSION['tipo']=$user['tipo'];
                    /*
                    if($_SESSION['tipo'] == "Calouro")
                    {
                        $result = mysqli_query($conn,"SELECT * FROM disciplinas WHERE id_tipo LIKE '".$_SESSION['id']."' ");
                        if(mysqli_num_rows($result) >0)
                        {
                            $_SESSION['disciplina']=array();
                            while($user = mysql_fetch_array($result))
                            {
                                $_SESSION['disciplina']=$user['disciplina'];
                            }
                
                        }
                    }
                     */
                }
            }
            header('location: ../view/home.php');
        }
        else{
        unset ($_SESSION['email']);
        unset ($_SESSION['password']);
        header('location: index.php');
        
        }
        
    }
  ?>
</body>
</html>