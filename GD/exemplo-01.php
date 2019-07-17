<?php 

header("Content-Type: image/png"); //Especificando o tipo de resposta do arquivo

$image = imagecreate(256, 256); // Recebe largura e altura e retorna um tipo resource 

/*
É necessário a criação de uma paleta de cores que será utilizada  da imagem
A primeira cor criada, fica automaticamente como plano de fundo da imagem
*/
$black = imagecolorallocate($image, 0 , 0 , 0); // Recebe o resource e aguarda a quantidade de rgb
$red = imagecolorallocate($image, 255 , 0 , 0); //Maximo 255

imagestring($image, 5, 60, 120, "Curso PHP 7", $red);
/*
Recebe um resource, parametros: tamanho da fonte , eixo x e y(margem a esquerda), uma string e a cor
*/


imagepng($image);

imagedestroy($image);

?>