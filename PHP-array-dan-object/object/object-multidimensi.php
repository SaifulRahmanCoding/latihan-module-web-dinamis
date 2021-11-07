<?
$pakaian=(object)[
	'nama'=>'kemeja',
	'ukuran'=>'S',
	'harga'=>100000,
	'warna'=>[
		'polos'=>'hitam',
		'motif'=>'batik'
	]
];
// cara mengetahui object multidimensi
echo "<pre>";
print_r($pakaian);
echo "<pre> <br>";

echo "<h4>----------- batas ---------------</h4>";
// cara mengkonversi warna menjadi object
echo "<h4>diubah ke object pada value warna</h4>";
$pakaian->warna=(object)$pakaian->warna;

// menampilkan data array setelah dirubah jadi object
echo "<pre>";
print_r($pakaian);
echo "<pre> <br>";

echo "<h4>pemanggilan</h4>";
// cara menampilkan data dari object
echo "nama : {$pakaian->nama} <br>";
echo "ukuran : {$pakaian->ukuran} <br>";
echo "harga : {$pakaian->harga} <br>";
echo "warna : {$pakaian->warna->polos}";

echo "<br><br><h4>----------- batas ---------------</h4>";

// konversi dari object ke array
echo "<h4>diubah dari object ke array</h4>";
$pakaian=(array)$pakaian;
// cara mengetahui object ke array
echo "<pre>";
print_r($pakaian);
echo "<pre>";

echo "<h4>pemanggilan</h4>";
echo "nama : {$pakaian['nama']} <br>";
echo "ukuran : {$pakaian['ukuran']} <br>";
echo "harga : {$pakaian['harga']} <br>";
echo "motif : {$pakaian['warna']->motif}";


echo "<br><br><h4>----------- batas ---------------</h4>";
echo "<h4>diubah dari object ke array pada value warna</h4>";
$pakaian['warna']=(array)$pakaian['warna'];

echo "<pre>";
print_r($pakaian);
echo "<pre>";

echo "<h4>pemanggilan</h4>";
echo "nama : {$pakaian['nama']} <br>";
echo "ukuran : {$pakaian['ukuran']} <br>";
echo "harga : {$pakaian['harga']} <br>";
echo "motif : {$pakaian['warna']['motif']}";
?>

<!-- 
perbedaaan pemangginal array normal dan object

array biasa pakai ['value']
array object pakai ->

-->