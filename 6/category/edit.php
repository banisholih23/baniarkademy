<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title> 
</head>
<body>
	<h2></h2>
	<p><a href="Crud.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	<h3>Edit Data Category</h3>
	<?php
		include ('koneksi.php');
		$id = $_GET['id'];
		$show = mysql_query("SELECT * FROM category WHERE id ='$id'");
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
			<td><input type="text" name="namahero" value="<?php echo $data['name'];?>" required><br></td>
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