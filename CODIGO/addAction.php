<html>
<head>
	<link rel="stylesheet" href="Formulario.css">
	<title>ADICIONAR</title>
</head>

<body>
<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
		
	// Check for empty fields
	if (empty($name) || empty($age) || empty($email)) {
		if (empty($name)) {
			echo "<font color='red'>ERRO: NOME INCORRETO!</font><br/>";
		}
		
		if (empty($age)) {
			echo "<font color='red'>ERRO: AGÊNCIA INCORRETA!</font><br/>";
		}
		
		if (empty($email)) {
			echo "<font color='red'>ERRO: EMAIL INCORRETO!</font><br/>";
		}
		
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} 
	else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($mysqli, "INSERT INTO users (`name`, `age`, `email`) VALUES ('$name', '$age', '$email')");
		
		// Display success message
		echo "<p><font color='green'>REGISTRO ADICIONADO COM SUCESSO!</p>";
		echo "<a href='index.php'>VER O RESULTADO</a>";
	}
}
?>
</body>
</html>
