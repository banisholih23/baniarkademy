<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<h2>Cashier</h2>
	
	<p><a href="Crud.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Data Cashier</h3>
	
<form action = "tambah-proses.php" method="post">
	<table cellpadding="3" cellspacing="0">
	<tr>
		<td> id </td>
		<td> : </td>
		<td> <input type ="text" name="id" required></td>
		</tr>
	<tr>
		<td> name </td>
		<td> : </td>
		<td> <input type ="text" name="name" required></td>
		</tr>
	
	<td> <input type = "submit" name="tambah" value="tambah"></td>
</form>
</html>

		
	