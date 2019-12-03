<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sou Calouro</title>

    
<?php

$host = "localhost";
$user = "root";
$senha = "";
$dbname = "calouros";
$conn = mysqli_connect($host,$user,$senha);
//selecionando banco
$db = mysqli_select_db($conn, $dbname);
//modificação para caracteres especiais
mysqli_set_charset($conn, 'utf8');
//$sql = "SELECT * FROM alunos AS a LEFT JOIN disciplinas d ON a.id_usuario = d.id_tipo";

//  $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");

// Obtendo os dados por meio de um loop while
?>

    
</head>
<body style="background-color:rgb(247, 252, 253);">
    
    <?php
     include('menu.php');
    ?>

 <div class="container">
    <div>
    <h3 class="mt-5">Sistema de busca de alunos novatos </h3> 
    <p>Selecione a disciplina na qual você quer auxiliar o aluno novato.</p>
  <div class="Calouro Caixa" id="adicionar">
  <form action='' method="post">
    <select class="form-control" name="nome_disciplina">
         <option value=" ">Selecione</option>
         <option value="cálculo 1">Cálculo 1</option>
         <option value="cálculo 2">Cálculo 2</option>
         <option value="cálculo 3">Cálculo 3</option>
         <option value="LógicaDeProgramação">Lógica de programação</option>
         <option value="POO">POO</option>
    </select>
    <button type="submit" name='pesquisar' >pesquisar</button>
  </form>
  </div>
    <hr>
    </div>
    
    <div class="col-md-12">
        <table class="table table-striped table-dark ">
            <tbody >
                <tr>
                    <th>Nome</th>
                    <th>Curso</th>
                    <th>Período</th>
                    <th>Disciplina</th>
                    <th>Contato / Whatsaap</th>
                    <th>Mensagem </th>
                    
                    
                </tr>
        
                   
                    <?php 
                        if(isset($_POST['pesquisar']))
                        {
                            $materia = $_POST['nome_disciplina'];
                            $pesquisar = mysqli_query($conn,"SELECT * FROM tipousers WHERE tipo LIKE 'Calouro' ");
                            while($linha = mysqli_fetch_array($pesquisar))
                            {
                            $idaluno =  $linha['id_aluno'];
                            //$aluno = mysqli_query($conn,"SELECT * FROM alunos WHERE id_usuario  LIKE '$idaluno'");
                            $disciplina =  mysqli_query($conn,"SELECT * FROM  disciplinas WHERE id_tipo LIKE '$idaluno' and nome_disciplina like '$materia' ");
                            while($alunod = mysqli_fetch_array($disciplina))
                                {
                                $aluno = mysqli_query($conn,"SELECT * FROM alunos WHERE id  LIKE '$idaluno'");
                                $linha2 = mysqli_fetch_array($aluno);
                                $idusuario=  $linha2['id_usuario'];
                                $pesqemail = mysqli_query($conn,"SELECT * FROM  users WHERE id LIKE '$idusuario'");
                                $usuario = mysqli_fetch_array($pesqemail);
                                echo "<tr>";
                                $nome = $linha2['nome'];
                                echo "<td>".$nome."</td>";
                                $curso = $linha2['curso'];
                                echo "<td>".$curso."</td>";
                                $periodo = $linha2['periodo'];
                                echo "<td>".$periodo."</td>"; 
                                $disc = $alunod['nome_disciplina'];
                                echo "<td>".$disc."</td>";
                                $telefone = $linha2['telefone'];
                                echo "<td>".$telefone."</td>";
                                $email = $usuario['email'];
                                echo "<td><a href='envio.php?email=$email'  style='color:white;'><i class='fa fa-envelope-o' style='font-size:24px; margin-right:10px;' aria-hidden='true'></i>Enviar</a></td>";

                               
                                
                                }
                            }

                        }
                        else
                        {
                            $pesquisar = mysqli_query($conn,"SELECT * FROM tipousers WHERE tipo LIKE 'Calouro'");
                            while($linha = mysqli_fetch_array($pesquisar))
                            {
                            $idaluno =  $linha['id_aluno'];
                            $aluno = mysqli_query($conn,"SELECT * FROM alunos WHERE id  LIKE '$idaluno'");
                            while($linha2 = mysqli_fetch_array($aluno))
                                {
                                $disciplina =  mysqli_query($conn,"SELECT * FROM  disciplinas WHERE id_tipo LIKE '$idaluno'");
                                $dialuno = mysqli_fetch_array($disciplina);
                                $idusuario = $linha2['id_usuario'];
                                $pesqemail = mysqli_query($conn,"SELECT * FROM  users WHERE id LIKE '$idusuario'");
                                $usuario = mysqli_fetch_array($pesqemail);
                                echo "<tr>";
                                $nome = $linha2['nome'];
                                echo "<td>".$nome."</td>";
                                $curso = $linha2['curso'];
                                echo "<td>".$curso."</td>";
                                $periodo = $linha2['periodo'];
                                echo "<td>".$periodo."</td>";
                                $disc = $dialuno['nome_disciplina'];
                                echo "<td>".$disc."</td>";
                                $telefone = $linha2['telefone'];
                                echo "<td><a href=''  style='color:white;'><i class='fa fa-whatsapp' style='font-size:24px; margin-right:10px;' aria-hidden='true'></i>$telefone</a></td>";
                                $email = $usuario['email'];
                                echo "<td><a href='envio.php?email=$email'  style='color:white;'><i class='fa fa-envelope-o' style='font-size:24px; margin-right:10px;' aria-hidden='true'></i>Enviar</a></td>";
                                

                                
                                }
                            }
                        }
                        mysqli_free_result($pesquisar);
                    ?>
                    
                  
            </tbody>
        </table>
    </div>

 </div>


</body>
</html>