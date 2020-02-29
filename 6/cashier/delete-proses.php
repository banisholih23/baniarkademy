<?php
		include ('koneksi.php');
		$id = $_GET['id'];
	
		$DELETE = mysql_query("DELETE FROM cashier WHERE id= '$id'");
		if ($DELETE) {
			echo ' Data berhasil di DELETE! ';
			echo ' <a href="Crud.php">kembali</a>';
		}else{
			echo ' Terjadi Error ';
		}
?>