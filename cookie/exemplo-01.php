<?php 

$dados = array(
 	"nome" => "cedro",
 	"setor"=> "ti"
);


setcookie("nomeCookie", json_encode($dados), time() + 3600);

echo "Cookie criado";




?>