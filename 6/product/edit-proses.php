<?php
	if(isset($_POST['simpan'])){
		include ('koneksi.php');
		$id = $_POST['id'];
		$nama = $_POST['name'];
		$harga = $_POST['price'];
		$idcategory = $_POST['id_category'];
		$idcashier = $_POST['id_cashier'];

		$UPDATE = mysql_query("UPDATE product set id='$id' , name='$nama' , price='$harga' , id_category='$idcategory' , id_cashier='$idcashier' WHERE id= '$id'");
		if ($UPDATE) {
			echo ' Data berhasil di UPDATE! ';
			echo ' <a href="Crud.php">kembali</a>';
		}else{
			echo ' Terjadi Error ';
		}
	}
?>