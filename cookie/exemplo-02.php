<?php

if (isset($_COOKIE["nomeCookie"])) {
	var_dump(json_decode($_COOKIE["nomeCookie"], true));
}


?>