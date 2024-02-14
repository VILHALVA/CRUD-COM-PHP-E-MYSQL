<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>	
	<title>CRUD</title>
	<link rel="stylesheet" href="index.css">
</head>

<body>
	<h2>HOME PAGER</h2>
	<p>
		<a href="add.php">NOVO</a>
	</p>
	<table width='80%' border=0>
		<tr bgcolor='#1a1a1a'>
			<td><strong>NOME</strong></td>
			<td><strong>AGENCIA</strong></td>
			<td><strong>EMAIL</strong></td>
			<td><strong>AÇÃO</strong></td>
		</tr>
		<?php
		// Fetch the next row of a result set as an associative array
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['age']."</td>";
			echo "<td>".$res['email']."</td>";	
			echo "<td><a href=\"edit.php?id=$res[id]\">EDITAR</a> | 
			<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('TEM CERTEZA QUE VOCÊ QUER APAGAR ESSE REGISTRO?')\">APAGAR</a></td>";
		}
		?>
	</table>
</body>
</html>
