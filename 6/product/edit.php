<!DOCTYPE html>
<html>
<head>
	<title>Soal 6 Arkademy</title> 
</head>
<body>
	<h2></h2>
	<p><a href="Crud.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	<h3>Edit Data Product</h3>
	<?php
		include ('koneksi.php');
		$id = $_GET['id'];
		$show = mysql_query("SELECT * FROM product WHERE id = '$id'");
		if($show === FALSE){
			die(mysql_error());
			echo'<script>window.history.back()</script>';
		}
		while ($data = mysql_fetch_assoc($show)){
	?>
	<form action="edit-proses.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $id;?>">
		<table cellpadding="3" cellspacing="3">
		<tr>
			<td>id</td>
			<td>:</td>
			<td><input type="text" name="id" value="<?php echo $data['id'];?>" required><br></td>

		</tr>
		<tr>
			<td>name</td>
			<td>:</td>
			<td><input type="text" name="name" value="<?php echo $data['name'];?>" required><br></td>
		</tr>
		<tr>
			<td>price</td>
			<td>:</td>
			<td><input type="text" name="price" value="<?php echo $data['price'];?>" required><br></td>
		</tr>
		<tr>
			<td>id_category</td>
			<td>:</td>
			<td><input type="text" name="id_category" value="<?php echo $data['id_category'];?>" required><br></td>
		</tr>
		<tr>
			<td>id_cashier</td>
			<td>:</td>
			<td><input type="text" name="id_cashier" value="<?php echo $data['id_cashier'];?>" required><br></td>
		</tr>
		<tr>
			<td>Klik</td>
			<td></td>
			<td><input type="submit" name="simpan" value="Simpan"></td>
		</tr>
		</table>
	</form>
</body>
</html>
<?php  
}  
?>