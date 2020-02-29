<?php
	if(isset($_POST['simpan'])){
		include ('koneksi.php');
		$useid = $_POST['id'];
		$nama = $_POST['name'];

		$UPDATE = mysql_query("UPDATE cashier set id='$useid' , name='$nama' WHERE id= '$id'");
		if ($UPDATE) {
			echo ' Data berhasil di UPDATE! ';
			echo ' <a href="Crud.php">kembali</a>';
		}else{
			echo ' Terjadi Error ';
		}
	}
?>