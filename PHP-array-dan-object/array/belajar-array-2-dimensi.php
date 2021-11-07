<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>array dua dimensi</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>Nama</th><th>Jurusan</th><th>Jenis Kelamin</th><th>Usia</th>
		</tr>
		<?
		$mahasiswa=array(
			array("Dimas","Teknik Informatika","Laki-Laki",23),
			array("Fitri","Sistem Informasi","Perempuan",22),
			array("Juan","Manajemen Informatika","Laki-Laki",24),
			array("Wulan","Teknik Kompjuter","Perempuan",20),
			array("Marcel","Teknik Informatika","Laki-Laki",24),
		);

		for ($row=0; $row < 5; $row++) { 
			echo "<tr>";
			for ($col=0; $col < 4; $col++) { 
				echo "<td>".$mahasiswa[$row][$col]."</td>";
			}
		}
		?>
	</table>
</body>
</html>
