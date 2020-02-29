<!DOCTYPE html>
<html>
<head>
	<title>Soal 6 Arkademy</title>
</head>
<body>
	<h2>Product</h2>
	
	<p><a href="Crud.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Data Product</h3>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>no</th>
			<th>id</th>
			<th>name</th>
			<th>price</th>
			<th>id_category</th>
			<th>id_cashier</th>
		</tr>
		
		<?php
		
		include('koneksi.php');
		
		$query = mysql_query("SELECT * FROM product ORDER BY id DESC") or die(mysql_error());
		
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
			
			
			$no = 1;
			while($data = mysql_fetch_assoc($query)){	

			//perulangan while dg membuat variabel $data yang akan mengambil data di database
				
			//menampilkan row dengan data di database
			
				echo '<tr>';
					echo '<td>'.$no.'</td>';	//menampilkan nomor urut
					echo '<td>'.$data['id'].'</td>';	//menampilkan data nis dari database
					echo '<td>'.$data['price'].'</td>';
					echo '<td>'.$data['id_category'].'</td>';
					echo '<td>'.$data['id_cashier'].'</td>';	//menampilkan data nama lengkap dari database
					 echo '<td><a href="edit.php?id='.$data['id'].'">Edit</a>  <a href="delete-proses.php?id='.$data['id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	
					//menampilkan link edit dimana tiap link terdapat GET id -> ?id=mahasiswa_id
				echo '</tr>';
				
				$no++;	//menambah jumlah nomor urut setiap row
				
			}
			
		}
		?>
	</table>
</body>
</html>