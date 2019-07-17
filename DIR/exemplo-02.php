<?php 

$imagens = scandir("imagens"); // Retorna um array com nome dos arquivos do diretorio informado

//var_dump($imagens);

$data = array();

foreach ($imagens as $imagem) {

	if (!in_array($imagem, array(".", ".."))) { //Verifica se existe os valores '.' e '..' dentro do array $imagens
		
		$filename = "imagens" . DIRECTORY_SEPARATOR . $imagem;
		//echo $filename . "<br>";

		$info = pathinfo($filename); //Retorna informações sobre o arquivo
		
		
		$info["size"] = filesize($filename);//Retorna o tamanho do arquivo em Bytes
		
		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename)); //Retona a data da ultima modificacao do arquivo em TIMESTAMP e formata com a funcao date
		$info["url"] = "http://localhost/DIR/" . str_replace("\\", "/", $filename);

		array_push($data, $info);
	}	
}

echo json_encode($data);

 ?>
 