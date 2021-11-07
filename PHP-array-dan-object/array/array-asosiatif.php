<?
// mendefinisikan Array pakaian
$pakaian=array(
	'nama'=>'kemeja pantai',
	'ukuran'=>'S',
	'harga'=>100000
);

// bisa juga ditulis dengan bigini
$pakaian2['nama']='kaos polos';
$pakaian2['ukuran']='XL';
$pakaian2['harga']='500000';

// menampilkan isi array
echo "<h4>pakaian 1</h4>";
echo "nama = ".$pakaian['nama'];
echo "<br>";
echo "ukuran = ".$pakaian['ukuran'];
echo "<br>";
echo "harga = ".$pakaian['harga'];

echo "<h4>pakaian 2</h4>";
echo "nama = ".$pakaian2['nama'];
echo "<br>";
echo "ukuran = ".$pakaian2['ukuran'];
echo "<br>";
echo "harga = ".$pakaian2['harga'];
?>