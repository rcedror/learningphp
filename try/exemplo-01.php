<?php 

try{
	
	throw new Exception("Erro na bagaça", 50);

} catch (Exception $e){

	echo json_encode(array(
		"message" => $e->getMessage(),
		"line" => $e->getLine(),
		"file" => $e->getFile(),
		"code" => $e->getCode()	
	));

	
}






?>