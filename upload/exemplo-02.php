<?php 
/// UPLOAD DE ARQUIVOS
$link  = "https://a.wattpad.com/cover/3316792-352-k698623.jpg";

$content = file_get_contents($link);

$parse =  parse_url($link);

$basename = basename($parse["path"]);

var_dump($parse);

var_dump($basename);


$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

 ?>

 <img src="<?=$basename?>">