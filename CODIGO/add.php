<html>
<head>
	<title>ADICIONAR</title>
	<link rel="stylesheet" href="Formulario.css">
</head>

<body>
	<h2>ADICIONAR</h2>
	<p>
		<a href="index.php">VOLTAR</a>
	</p>

	<form action="addAction.php" method="post" name="add">
		<table width="25%" border="0">
			<tr> 
				<td>NOME</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>AGÊNCIA</td>
				<td><input type="text" name="age"></td>
			</tr>
			<tr> 
				<td>EMAIL</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="ADICIONAR"></td>
			</tr>
		</table>
	</form>
</body>
</html>

