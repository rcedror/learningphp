<form method="POST" enctype="multipart/form-data">
	 <input type="file" name="cedro">
	 <button>Upload</button>
</form>

<?php 


if ($_SERVER["REQUEST_METHOD"] === "POST")
{
	
	$file = $_FILES["cedro"]; // $_FILES é a super global para arquivos enviados via uploads

	if ($file['error']) 
	{
		throw new Exception("Error :" . $file['error']);
	}

		$diruploads = "uploads";

		if (!is_dir($diruploads)) {
			mkdir($diruploads);
		}

		// var_dump($file);
		if (move_uploaded_file($file["tmp_name"], $diruploads . DIRECTORY_SEPARATOR . $file["name"]) ) {
			/* $file["tmp_name"], é o path temporario do arquivo, e em seguida o destino, onde você pode 
			 especificar um novo nome, ou usar o nome original do arquivo  que fica em  $file["name"]
			*/

			echo "Upload feito!";
			
		} else {
			throw new Exception("Erro no upload");	
		}
		
	}

?>