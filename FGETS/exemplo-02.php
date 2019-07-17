<?php 

$filename = "logo.png";
/*
A funcao 'file_get_contents' tem o tipo de retorn binário
A funcao 'base64_encode' recebe um binario e converte em string

*/
$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);
/*

*/

$mimetype = $fileinfo->file($filename);

$base64encode =  "data:". $mimetype .";base64,". $base64;

?>

<a href="<?=$base64encode?>" target="_blank">Imagem</a>

<img src="<?=$base64encode?>">