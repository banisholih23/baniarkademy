<!DOCTYPE html>
<html>
<head>
	<title>Soal 6 Arkademy</title>
</head>
<body>
	<h2>Cashier</h2>
	
	<p><a href="crud.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Data Cashier</h3>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>no</th>
			<th>id</th>
			<th>name</th>
		</tr>
		
		<?php
		
		include('koneksi.php');
		
		$query = mysql_query("SELECT * FROM cashier ORDER BY name DESC") or die(mysql_error());
		
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
					//menampilkan data nis dari database
					echo '<td>'.$data['id'].'</td>';
					echo '<td>'.$data['name'].'</td>';	//menampilkan data nama lengkap dari database
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