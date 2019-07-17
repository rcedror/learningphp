<?php 

function trataCep($cep)
{
	if (!$cep)
	{
		throw new Exception("Cep no formato inválido", 700);
	} else{
		echo $cep;
	}
}

try
{
	trataCep("40253260");
	
} catch(Exception $e)
{
		echo $e->getMessage();
} finally
{
	echo "Finalmente!";
}




?>