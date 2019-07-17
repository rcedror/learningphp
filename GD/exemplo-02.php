<?php 

$image =  imagecreatefromjpeg("certificado.jpg");
$nomeAluno = "Renato Cedro";

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 240, 350, utf8_decode("Certificamos que $nomeAluno realizou o curso de PHP 7"), $titleColor);
imagestring($image, 3, 240, 450, utf8_decode("Concluído em :").date("d/m/Y"), $titleColor);

header("Content-Type: image/jpeg");

imagejpeg($image, "certificado-$nomeAluno.jpg"); 
/*Passando uma string após o resource, é criado um arquivo com no diretorio do script PHP com o nome informado
OBS: Nesse caso a imagem não é renderizada pelo browser,e sim o arquivo é criado no diretório*/

imagedestroy($image);

?>