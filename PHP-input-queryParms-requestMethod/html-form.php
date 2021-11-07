<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Input Form</title>
	
	<link rel="stylesheet" type="text/css" href="bootstrap-5.0.2/css/bootstrap.min.css">
	
	<script type="text/javascript" src="bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>

	<!-- icon bootstrap -->
	<link rel="stylesheet" type="text/css" href="icons/font/bootstrap-icons.css">

	<!-- costum CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<div id="form" class="pt-5">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col col-8 p-4 bg-light">
					<!-- pada field label, for harus sama dengan id -->
					
					<form action="action.php" method="POST">
						<div class="form-group mb-2">
							<label for="name">Nama Lengkap</label>
							<input id="name" name="name" type="text" class="form-control" placeholder="Nama Lengkap" required>
						</div>

						<div class="form-group mb-2">
							<label for="usia">Usia</label>
							<input id="usia" name="age" type="number" class="form-control" placeholder="Isi Usia Anda" required>
						</div>

						<div class="form-group mb-2">
							<label for="email">Email</label>
							<input id="email" name="email" type="email" class="form-control" placeholder="jangan sampai salah masukkan email" required>
						</div>

						<div class="form-group mb-2">
							<label for="password">Password</label>
							<input id="password" name="password" type="password" class="form-control" placeholder="Isi Password Anda" required>
						</div>

						<div class="form-group mb-2">
							<label for="re-password">Konfirmasi Password</label>
							<input id="re-password" name="re-password" type="password" class="form-control" placeholder="Ulangi Password" required>
						</div>

						<div class="form-group mb-2">
							<label for="address">Tulis Alamat Anda</label>
							<textarea name="address" id="address" rows="3" class="form-control" placeholder="Isikan Alamat Anda" required></textarea>
						</div>
						<!-- 
							select option dikenal juga dengan nama dropdown 
						-->
						<div class="form-group mb-2">
							<label for="pilihkota">Pilih Kota Anda</label>
							<select id="cities" class="form-control" name="cities" required>
								<option value="">- Pilih Kota Anda</option>
								<option value="Batam">Batam</option>
								<option value="Banyuwangi">Banyuwangi</option>
								<option value="Pandeglang">Pandeglang</option>
								<option value="Situbondo">Situbondo</option>
								<option value="Bondowoso">Bondowoso</option>
							</select>
						</div>

						<div class="form-goup mb-2">
							<label>Data Pendukung Covid-19</label>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" value="swabStatus" name="swabStatus" id="check1">
								<label for="check1" class="form-check-label">Hasil Swab Negatif</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" value="vaccineStatus" name="vaccineStatus" id="check2">
								<label for="check2" class="form-check-label">Sudah Vaksinasi</label>
							</div>
						</div>

						<div class="form-group mb-2">
							<label>Jenis Kelamin</label>
							<div class="form-check">
								<input type="radio" class="form-check-input" value="male" id="male" name="gender" required>
								<label for="male" class="form-check-label">Laki-Laki</label>
							</div>
							<div class="form-check disabled">
								<input type="radio" class="form-check-input" value="female" id="female" name="gender" required>
								<label for="female" class="form-check-label">Perempuan</label>
							</div>
						</div>

						<input type="submit" name="submit" value="kirim" class="btn btn-primary">

					</form>

				</div>
			</div>
		</div>
	</div>
</body>
</html>