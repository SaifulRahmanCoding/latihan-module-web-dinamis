<h1>Contoh while 1</h1>

<?
// pemberian nilai awal variable x
$x=1;
// perulangan while selama nilai x kurang dari samadengan 5
while ($x<=5) {
	echo "Angka ".$x."<br>";
	$x++;
}
?>

<br><h1>Contoh while 2</h1>
<?
// pemberian nilai awal variable x
$x=0;
// perulangan while selama nilai x kurang dari samadengan 100
while ($x<=100) {
	echo "Angka ".$x."<br>";
	$x+=10;
}
?>

<br><h1>Contoh while cek array</h1>
<?
$buah=array("mangga","pisang","jambu","apel","jeruk");

$cari="pisang";
$i=0;

echo "ukuran array = ".sizeof($buah)."<br><br>";
while ($i<sizeof($buah)) {
	
	echo "pengecekan apakah ".$cari." = ".$buah[$i]."<br>";
	
	if ($cari==$buah[$i]) {
		echo "<br>".$cari." ditemukan pada index ke-".$i."<br>";
		break; //berfungsi menghentikan perulangan saaat variable suadah ditemukan
	}

	$i++;
}

?>