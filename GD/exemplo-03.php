<?php 

$image =  imagecreatefromjpeg("certificado.jpg");
$nomeAluno = "Renato Cedro";

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

echo __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf";

imagettftext($image, 32, 0, 450, 150,  $titleColor, __DIR__."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
 /* O argumento apos a fonte, diz respeito ao o angulo
*/

imagettftext($image, 32, 0, 240, 350, $titleColor, __DIR__."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", utf8_decode("Certificamos que $nomeAluno realizou o curso de PHP 7"));

imagestring($image, 3,240, 450 , utf8_decode("Concluído em :").date("d/m/Y"), $titleColor);

 //header("Content-Type: image/jpeg");

//imagejpeg($image); 
imagejpeg($image, "certificado-$nomeAluno.jpg"); 
/*Passando uma string após o resource, é criado um arquivo com no diretorio do script PHP com o nome informado
OBS: Nesse caso a imagem não é renderizada pelo browser,e sim o arquivo é criado no diretório*/

imagedestroy($image);

?>