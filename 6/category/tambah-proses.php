<?php

if (isset ($_POST ['tambah'])){

	include ('koneksi.php');
	
	$useid = $_POST ['id'];
	$nama = $_POST ['name'];
	
$input = mysql_query ("INSERT INTO category VALUES (NULL, '$useid', '$nama')") or die (mysql_error());

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