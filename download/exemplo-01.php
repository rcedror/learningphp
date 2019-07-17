<?php 

 $link = "http://2.bp.blogspot.com/-mNml2I1ZvsY/VZ57ASISatI/AAAAAAAAN70/E95qvO1k46I/s1600/sects-and-factions.jpg";

 $content = file_get_contents($link);

 //var_dump($content);

$parse = parse_url($link);

$filename = basename($parse["path"]);

$file = fopen($filename, "w+");

fwrite($file, $content);

fclose($file);

 ?>

 <img src="<?=$filename?>">