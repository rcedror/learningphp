<?php 

if($_SERVER["REQUEST_METHOD"] === "POST")
{

$cep = $_POST['cepBusca'];

$link_ws = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link_ws);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // Informa que espera um retorno de dados
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // Não verifica o SSL


$retorno = curl_exec($ch);

curl_close($ch);

$data = json_decode($retorno, 1);
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Teste API</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

	<div class="container mt-5">
		<form class="form" action="" method="POST">
		  <div class="form-group">
		    <label for="cep" class="sr-only">CEP</label>
		    <input type="text" class="form-control" id="cep" placeholder="CEP" name="cepBusca" required>
		  </div>
		  <button type="submit" class="btn btn-primary mb-2">Buscar</button>
		</form>	
	</div>
	
	<div class="container">
			<form>
			  <fieldset enable>
			    <div class="form-group">
			    	<div class="row">
			    	  <div class="col">	
					      <label for="cep0">CEP</label>
					      <input type="text" id="cep0" class="form-control" placeholder="CEP" value="<?=$data['cep']?>">
				      </div>
				      <div class="col">	
					      <label for="logradouro">Logradouro</label>
					      <input type="text" id="logradouro" class="form-control" placeholder="Logradouro" value="<?=$data['logradouro']?>">
				  	  </div>
				      <div class="col">	
					      <label for="complemento">Complemento</label>
					      <input type="text" id="complemento" class="form-control" placeholder="Complemento" value="<?=$data['complemento']?>">
			      	  </div>
			       </div>
			       <div class="row">
			    	  <div class="col">	
					      <label for="bairro">Bairro</label>
					      <input type="text" id="bairro" class="form-control" placeholder="Bairro" value="<?=$data['bairro']?>">
				      </div>
				      <div class="col">	
					      <label for="localidade">Localidade</label>
					      <input type="text" id="localidade" class="form-control" placeholder="Localidade" value="<?=$data['localidade']?>">
				  	  </div>
				      <div class="col">	
					      <label for="uf">UF Estado</label>
					      <input type="text" id="uf" class="form-control" placeholder="UF Estado" value="<?=$data['uf']?>">
			      	  </div>
			       </div>
			    
			  </fieldset>
			</form>
	</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>