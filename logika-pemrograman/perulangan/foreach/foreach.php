<!-- perulangan foreach khusus untuk membaca array -->
<?
// array artikel
$artikel=array(
	(object)array(
		"judul"=>"Card Title 1",
		"text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed to tempor includidunt ut labore et dolore magna aliqua"
	),
	(object)array(
		"judul"=>"Card Title 2",
		"text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed to tempor includidunt ut labore et dolore magna aliqua"
	),
	(object)array(
		"judul"=>"Card Title 3",
		"text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed to tempor includidunt ut labore et dolore magna aliqua"
	),
	(object)array(
		"judul"=>"Card Title 4",
		"text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed to tempor includidunt ut labore et dolore magna aliqua"
	)
);

// foreach ($artikel as $data) {
	// echo $data->judul."<br>";
// }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-5.0.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="icons/font/bootstrap-icons.css">

	<script type="text/javascript" src="bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<!--header-->	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid bg-light">

			<!--navbar brand-->
			<a class="navbar-brand" href="#">
				<img src="jong_koding_logo.png"/>
			</a>

			<!--navbar toggler-->
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-expanded="false" aria-label="Togglenavigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!--navbar collapse-->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profile
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="#">Login</a></li>
							<li><hr class="dropdown-divider"></li>
							<li><a class="dropdown-item" href="#">Register</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!--carousel indicator-->
	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
		
		<!--carousel indicator-->
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>

		<!--carousel inner-->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/sakura.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Carousel Slide Pertama</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
				</div>
			</div>

			<div class="carousel-item">
				<img src="img/sakura-2.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Carousel Slide Kedua</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
				</div>
			</div>

			<div class="carousel-item">
				<img src="img/sakura-3.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Carousel Slide Ketiga</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
				</div>
			</div>
		</div>

		<!--carousel navigation-->
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>

		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

	<!--grid system bagian 1-->
	<div id="features" class="py-5">
		<div class="container">
			<div class="row">
				<!--box 1-->
				<div class="col col-4">
					<div class="card text-center py-3">
						<div class="card-body">
							<div class="icon mb-4">
								<i class="bi bi-alarm"></i>
							</div>
							<h5 class="card-title">Ketelittian dan Kedisiplinan</h5>
							<p class="card-text">Beljar ngoding harus teliti dan disiplin</p>
						</div>
					</div>
				</div>
				<!--box 2-->
				<div class="col col-4">
					<div class="card text-center py-3">
						<div class="card-body">
							<div class="icon mb-4">
								<i class="bi bi-alarm"></i>
							</div>
							<h5 class="card-title">Ketelittian dan Kedisiplinan</h5>
							<p class="card-text">Beljar ngoding harus teliti dan disiplin</p>
						</div>
					</div>
				</div>
				<!--box 3-->
				<div class="col col-4">
					<div class="card text-center py-3">
						<div class="card-body">
							<div class="icon mb-4">
								<i class="bi bi-alarm"></i>
							</div>
							<h5 class="card-title">Ketelittian dan Kedisiplinan</h5>
							<p class="card-text">Beljar ngoding harus teliti dan disiplin</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!--grid system bagian 2-->
	<div id="blog" class="py-5">
		
		<div class="container">
			
			<div class="row">

				<!--box -->
				<? foreach ($artikel as $data) {?>
				
				<div class="col col-6">

					<div class="card mb-3">
						<img src="img/black.jpg" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title"><?=$data->judul?></h5>
							<p class="card-text"><?=$data->text?></p>
							<p class="card-text"><small class="text-muted">Last update 3 mins ago</small></p>
						</div>
					</div>

				</div>
				<?}?>

			</div>

		</div>

	</div>
</body>
</html>
<!---->
