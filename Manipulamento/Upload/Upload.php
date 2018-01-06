<form method="POST" enctype="multipart/form-data">
	
	<input type="file" name="Upload">
	
	<button type="submit">Enviar</button>
</form>

<?php
	
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		
		$arquivo = $_FILES["Upload"];

		if ($arquivo["error"]) {
			throw new Exception("Error: ".$arquivo["error"]);
		}

		$dirUpload = "Uploads";

		if (!is_dir($dirUpload)) {
			mkdir($dirUpload);
		}

		if (move_uploaded_file($arquivo["tmp_name"], $dirUpload. DIRECTORY_SEPARATOR . $arquivo["name"])){

			echo "Upload relalizado com sucesso!!!";

		}else{
			throw new Exception("Error Não foi possivel fazer o Upload");
			
		}
	}

?>