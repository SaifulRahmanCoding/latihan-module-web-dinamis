<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array satu dimensi</title>
	<style type="text/css">
		.box{
			padding: 20px;
			height: 10px;
			background: lightgreen;
			float: left;
			margin: 5px;
		}
		.box2{
			padding: 20px;
			height: 10px;
			background: lightcoral;
			float: left;
			margin: 5px;
		}
	</style>
</head>
<body>
	<?
	$days=["senin","selasa","rabu","kamis","jumat","sabtu","minggu"];

	// cara 1
	for ($d=0; $d <count($days) ; $d++) {?>
		<div class="box"><? echo $days[$d]; ?></div>
		<? 
	}
	?>

	<div class="clear"></div>

	<!-- cara 2 -->
	<? foreach ($days as $hari) {?>
		<div class="box2"><?echo "$hari";?></div>
		<?
	}?>
</body>
</html>
