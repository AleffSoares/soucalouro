<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/app.css" rel="stylesheet">
    <link href="../css/calouro.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">
    <link  href="..//navbar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>
    <title>Sou Calouro</title>

</head>
<body>


<section id="inicial" class="caixa2">
   <div class="container">
      <div class="form-largura card">
              <!-- Default form register -->
         <form id="register" class="text-center border border-light p-5" action="cadastro.php" method="post" >
               
               <p class="h4 mb-4">Cadastro</p>
             <div class="form-group text-left">
               <label for="nome-usuario">Nome:</label>
               <input type="text" id="nome-usuario" class="form-control mb-4" placeholder="Name" name="nome" required minlength="5">
               <br>
               <br>

               <label for="celular-usuario">Celular:</label>
               <input type="text" id="celular-usuario" class="form-control mb-4" placeholder="Celular" name="celular" >
               <br>
               <br>

               <label for="email-usuario">Email:</label>
               <input type="email" id="email-usuario" class="form-control mb-4" placeholder="E-mail" name="mail" required>
               <br>
               <br>

               <label for="senha-usuario">Senha:</label>
               <input class="form-control" type="password" id="senha-usuario" placeholder="Digite sua senha" name="cpass" required minlength="6">
               <br>
               <br>

               <label for="senha-confirmar-usuario">Confirmar Senha:</label>
               <input class="form-control" type="password" id="senha-confirmar-usuario" placeholder="Digite sua senha" name="recpass" required minlength="6">
               <br>
               <br>
               <label class="texto" >Você é aluno Calouro ou Veterano ?</label><br><br>
               <input type="radio" id="tipo" name="tipo" value="Calouro">   
               <label class="texto" >Calouro</label>    
	      	 <input type="radio" id="tipo" name="tipo" value="Veterano">
	      	 <label class="texto">Veterano</label>

               <br>
               <br>
               <label for="curso">Curso:</label>
               <input type="text" id="curso" class="form-control mb-4" placeholder="Curso" name="curso" required>

               <br>
               <br>

               <label for="periodo">Período</label>
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
               <br>

                  <div class="Calouro Caixa" id="adicionar">
                            <label for="disciplina">Escolha qual disciplina você tem dificuldade:</label>
                            <p>Adicionar mais disciplina:</p>
                            <button type="button" id="add-campo"> + </button>

                            <select class="form-control" id="disciplina" name="nome_disciplina">
                                   <option value=" ">Selecione</option>
                                   <option value="cálculo 1">Cálculo 1</option>
                                   <option value="cálculo 2">Cálculo 2</option>
                                   <option value="cálculo 3">Cálculo 3</option>
                                   <option value="LógicaDeProgramação">Lógica de programação</option>
                                   <option value="POO">POO</option>
                            </select>    
                  </div>
            
               <br>
               <br>
               <button class="btn btn-info btn-block"  formaction="../model/cadastro.php" type="submit" name="cadastrarbtn">Enviar</button>
               
               
             </div>
             
         </form>
      </div>

         <!-- Default form register -->
   </div>
 </section>



<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script>

$("#register").validate({
       rules : {
             nome:{
                    required:true,
                    minlength:5
             },
             celular:{
                    required:true
                    
             },
             mail:{
                    required:true,
                    email: true
             },
             cpass: {
                    required:true,
                    minlength:6
             },
             recpass:{
                    required:true
                    
             },

             curso:{
                    required:true
              
             }
       

                                          
       },
       messages:{
             nome:{
                    required:"Por favor, informe seu nome",
                    minlength:"O nome deve ter pelo menos 3 caracteres"
             },
             celular:{
              required:"É necessário informar número de celular"
                    
             },
             mail:{
                    required:"É necessário informar um email",
                    email: "O campo email deve conter um email válido."
             },
             mail:{
                    required:"É necessário informar um email"
             },
             cpass:{
                   required: "O campo senha é obrigatório."
             },
             recpass:{
                  required: "O campo confirmação de senha é obrigatório."
                  
             },
             curso: {
                    required:"É necessário informar o seu curso"
             }
       }
})

$(document).ready(function(){
    	$('input[type="radio"]').click(function(){
        	var inputValue = $(this).attr("value");
        	var targetBox = $("." + inputValue);
        	$(".Caixa").not(targetBox).hide();
        	$(targetBox).show();
    	});
})

//https://api.jquery.com/click/
$("#add-campo").click(function () {
       
	//https://api.jquery.com/append/
       $("#adicionar").append(
              
              '<label for="disciplina">Escolha qual disciplina você tem dificuldade:</label><select class="form-control largura" id="disciplina" name="disciplina."> <option value="cálculo 1">Cálculo 1</option><option value="cálculo 2">Cálculo 2</option><option value="cálculo 3">Cálculo 3</option><option value="LógicaDeProgramação">Lógica de programação</option><option value="POO">POO</option></select>'
              
       );
});
  

</script>




</body>
</html>