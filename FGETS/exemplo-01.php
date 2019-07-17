<?php 

$filename = "usuarios.csv";

if (file_exists($filename)) 
{
	$file = fopen($filename, "r"); // Abrindo o arquivo em modo leitura

	$headers = explode(",", fgets($file));
	/*A função fgets retorna a primeira linha de um arquivo
	 A função explode, transforma um string em um array, separando os valores através de um delimitador,
	 logo toda vez que ele encontrar uma "," ele cria um posição inserindo o valor que vem logo apos a virgula e elimina a virgula 
	*/

	$data = array();

	while ($row = fgets($file)) 
	{
		$rowData = explode(",",$row);
		$linha = array();

		for ($i=0; $i < count($headers) ; $i++) 
		{ 
			$linha[$headers[$i]] = $rowData[$i];
		}

		array_push($data, $linha);
	}


	fclose($file);

	echo json_encode($data);

} else {
	echo "NÃO EXISTE";
}




?>