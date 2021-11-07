<?
// index baris dan kolom terdapat pada array multidimensi
// dalam hal penyebutannya, baris baru kolom
// mendefinisikan array multidimensi
$pakaian=[
	["kemeja",22,18],
	["blaser",15,13],
	["kaos",5,2],
	["kemeja batik",17,15]
];
// menulsikan array multidimensi
echo "<h4>menampilkan kemeja</h4>";
echo "jenis pakaian = ".$pakaian[0][0]."<br>";
echo "stock = ".$pakaian[0][1]."<br>";
echo "terjual = ".$pakaian[0][2]."<br>";

echo "<h4>menampilkan blaser</h4>";
echo "jenis pakaian = ".$pakaian[1][0]."<br>";
echo "stock = ".$pakaian[1][1]."<br>";
echo "terjual = ".$pakaian[1][2]."<br>";

echo "<h4>menampilkan kaos</h4>";
echo "jenis pakaian = ".$pakaian[2][0]."<br>";
echo "stock = ".$pakaian[2][1]."<br>";
echo "terjual = ".$pakaian[2][2]."<br>";

echo "<h4>menampilkan kemeja batik</h4>";
echo "jenis pakaian = ".$pakaian[3][0]."<br>";
echo "stock = ".$pakaian[3][1]."<br>";
echo "terjual = ".$pakaian[3][2]."<br>";
?>