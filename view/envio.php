<html>
	<head>
		<meta charset="utf-8" />
    	<title>App Mail Send</title>

    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	</head>
	

	<body>

		<div class="container">  

		<?php
			$email = $_GET['email'];
			$remetente = '';
			if($email == null) 
			{

			}
			else
			{
				$remetente = "style='display:none'; ";
			}
		?>

			<div class="py-3 text-center">
				<img class="d-block mx-auto mb-2" src="../img/logo.png" alt="" width="72" height="72">
				<h2>Send Mail</h2>
				<p class="lead">Mande um e-mail para o calouro selecionado.</p>
			</div>

      		<div class="row">
      			<div class="col-md-12">
  				
					<div class="card-body font-weight-bold">
						<form action="../model/processa_envio.php" method="post">
							<div class="form-group" <?php echo $remetente ?>>
								<label for="para">Para</label>
								<input name="para" type="text" class="form-control" id="para" placeholder="joao@dominio.com.br" value=<?php echo $email ?> >
							</div>

							<div class="form-group">
								<label for="assunto">Assunto</label>
								<input name="assunto" type="text" class="form-control" id="assunto" placeholder="Assundo do e-mail">
							</div>

							<div class="form-group">
								<label for="mensagem">Mensagem</label>
								<textarea name="mensagem" class="form-control" id="mensagem"></textarea>
							</div>

							<button type="submit" class="btn btn-primary btn-lg">Enviar Mensagem</button>
							<button type="submit" formaction="teste2.php"  class="btn btn-primary btn-lg">Cancelar</button>
						</form>
					</div>
				</div>
      		</div>
      	</div>

	</body>
</html>