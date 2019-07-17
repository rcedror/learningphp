<?php 


$dir1 = "nara";
$dir2 = "uzumaki";

if(!is_dir($dir1)) mkdir($dir1);
if(!is_dir($dir2)) mkdir($dir2);
 

$filename = "cedrao.txt";

if (!file_exists($dir1. DIRECTORY_SEPARATOR . $filename )) {
	 
	 $file = fopen($dir1. DIRECTORY_SEPARATOR . $filename, "w+");

	 fwrite($file, "Now : ". date("Y-m-d H:i:s"));
	 fclose($file);
}

rename($dir1. DIRECTORY_SEPARATOR . $filename, $dir2. DIRECTORY_SEPARATOR . $filename);
/*a funcaoa rename() renomeia um arquivo caso ele continue no mesmo diretorio, ou o move para outro diretorio mantendo ou não o nome do arquivo
*/

?>