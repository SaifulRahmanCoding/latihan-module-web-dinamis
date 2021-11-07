<?

if (isset($_POST['submit'])) {
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$age=$_POST['age'];
	$address=$_POST['address'];
	$cities=$_POST['cities'];
	$gender=$_POST['gender'];


	if (isset($_POST['swabStatus'])) {
		$swabStatus=$_POST['swabStatus'];	
	}
	else{
		$swabStatus="";	
	}

	if (isset($_POST['vaccineStatus'])) {
		$vaccineStatus=$_POST['vaccineStatus'];	
	}
	else{
		$vaccineStatus="";	
	}
	

	if ($gender=="male") {
		$genderText="Laki-Laki";
	}
	else{
		$genderText="Perempuan";
	}

	if ($swabStatus == true) {
		$swabCondition="Hasil swab Negatif";
	}
	else{
		$swabCondition="Hasil swab Positif";
	}

	if ($vaccineStatus == true) {
		$vaccineCondition="Telah di vaksin";
	}
	else{
		$vaccineCondition="Belum di vaksin";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Action</title>

	<link rel="stylesheet" type="text/css" href="bootstrap-5.0.2/css/bootstrap.min.css">
	
	<script type="text/javascript" src="bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>

	<!-- icon bootstrap -->
	<link rel="stylesheet" type="text/css" href="icons/font/bootstrap-icons.css">

	<!-- costum CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="profile">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col col-8">
					
					<h4>Nama = <?=$name?></h4>
					<h4>Jenis Kelamin = <?=$genderText?></h4>
					<h4>Email = <?=$email?></h4>
					<h4>Umur = <?=$age?></h4>
					<h4>Alamat = <?=$address?></h4>
					<h4>Kota = <?=$cities?></h4>
					<h4>Hasil Swab = <?=$swabCondition?></h4>
					<h4>Vaksinasi = <?=$vaccineCondition?></h4>

				</div>
			</div>
		</div>
	</div>
</body>
</html>