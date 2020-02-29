<html>
<head>
	<title>Soal 6 Arkademy</title>
</head>
<body>
	<h2>Product</h2>
	
	<p><a href="Crud.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Data Product</h3>
	
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
	<tr>
		<td> price </td>
		<td> : </td>
		<td> <input type ="text" name="price" required></td>
		</tr>
	<tr>
		<td> idcategory </td>
		<td> : </td>
		<td> <input type ="text" name="id_category" required></td>
		</tr>
	<tr>
		<td> idcashier </td>
		<td> : </td>
		<td> <input type ="text" name="id_chasier" required></td>
		</tr>
	
	<td> <input type = "submit" name="tambah" value="tambah"></td>
</form>
</html>

		
	