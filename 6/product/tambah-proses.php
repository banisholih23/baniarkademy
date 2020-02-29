<?php

if (isset ($_POST ['tambah'])){

	include ('koneksi.php');
	
	$idprdct = $_POST ['id'];
	$nama = $_POST ['name'];
	$harga = $_POST ['price'];
	$idcategory = $_POST ['id_category'];
	$idcashier = $_POST ['id_cashier'];
	
$input = mysql_query ("INSERT INTO product VALUES (NULL, '$idprdct', '$nama', '$harga', '$id_category', '$id_cashier')") or die (mysql_error());

if ($input){
	echo 'Data Berhasil Di Tambahkan ';
	echo '<a href="tambah.php">Kembali</a>' ;
	}else{
		
	echo 'Gagal Di Tambahkan ';
	echo '<a href="tambah.php">Kembali</a>' ;
	}
	
	}else{
	
	echo '<script> windows.history.back() </script>' ; 
}
?>