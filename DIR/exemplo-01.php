<?php 

$name = "imagens";


if (!is_dir($name)) { // Funcao verifica se o diretorio existe
	
	mkdir($name);// funcao cria um diretorio; para remover usa a funcao rmdir
	echo "Não achei, por isso criei";

}else{

    echo "¬¬ Essa zorra já existe!";

}


?>