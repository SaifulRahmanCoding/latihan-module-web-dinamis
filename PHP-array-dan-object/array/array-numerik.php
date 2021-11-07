<?
echo "<h4>menampilkan value pada setiap array</h4>";
// cara 1
$buah1=["rambutan","mangga","pisang","jambu"];
// cara 2
$buah2=array("rambutan","mangga","pisang","jambu");

// cara 3
// dengan cara ini urutan bisa diacak, tidak harus dari index 0.
$buah3[0]="rambutan";
$buah3[1]="mangga";
$buah3[2]="pisang";
$buah3[3]="jambu";

// pemanggilan array agar tampil

echo "buah 1";
echo "<br>";
print_r($buah1);


echo "<br>";
echo "buah 2";
echo "<br>";
print_r($buah2);


echo "<br>";
echo "buah 3";
echo "<br>";
print_r($buah3);

// memanggil value tertentu di dalam array
echo "<br><br>";
echo "<h4>memanggil value tertentu di dalam array</h4>";
echo "Buah ke-2 dari index array buah 1 adalah = ".$buah1[1];
?>