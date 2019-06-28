<?php
include("pages/header.php");
?>
<!-- l'accueil avec le scroll la -->
<div id="home">
	<!-- Navigation menu -->
	<?php require("pages/menu.php");?>
	<!-- debut image qui slide -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="7000" !imprtant>
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<!-- debut de l'inner -->
		<div class="carouseel-inner">
			<!-- slide1 -->
			<div class="carousel-item active" style="background-image: url(img/student2.jpeg);">
				<!-- background: center center/cover url(img/computers.png) fixed; -->
				<div class="carousel-caption text-center">
					<h1>L'ÉCOLE DES MÉTIERS <br>DE L'ENTREPRISE !</h1>
					<h3>Accédez à plus de 100 métiers dans les domaines <br> de la gestion & des technologies.</h3>
					<a href="/pages/inscription.php" class="btn btn-outline-primary btn-lg">S'inscrire</a>
				</div>
			</div>
			<!-- slide2 -->
			<div class="carousel-item " style="background-image: url(img/student3.jpg);">
				<div class="carousel-caption text-center">
					<h1>UNE PÉDAGOGIE INNOVANTE !</h1>
					<h3>Nos formations allient étroitement la théorie & la pratique.</h3>
					<a href="#" class="btn btn-outline-primary btn-lg">En Savoir plus</a>
				</div>
			</div>
			<!-- slide3 -->
			<div class="carousel-item " style="background-image: url(img/student1.jpg);">
				<div class="carousel-caption text-center">
					<h1>DES ÉTUDES ÉPANOUISSANTES !</h1>
					<h3>Une vie estudiantine riche où l’on allie l’utile à l’agréable,<br> au-delà de la formation.</h3>
					<a href="#" class="btn btn-outline-primary btn-lg">En Savoir plus</a>
				</div>
			</div>
		</div>
		<!-- fin inner -->
		<!-- Previous & next buttton -->
		<a href="#carouselExampleIndicators" class="carousel-control-prev" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a href="#carouselExampleIndicators" class="carousel-control-next" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- fin image qui slide -->
</div>
<!-- fin de l'accueil -->
<div id="portfolio" class="offset">
	<div class="jumbotron container-fluid">

		<div class="col-12 text-center">
			<h3 class="heading"></h3>
			<div class="heading-underline"></div>
		</div>
		<div class="container">
			<div class="histoire">
				<div class="row">
					<div class="col-6 col-md-4">
						<div class="card text-center">
							<img src="img/Foto-16.jpg" alt="team1" class="card-img-top">
							<div class="card-body">
								<h4>La formation ouverte à distance (FOAD)</h4>
							</div>
						</div>
					</div>
					<div class="col-6 col-md-4">
						<div class="card text-center">
							<img src="img/ABIDJANpigier.jpg" alt="team2" class="card-img-top">
							<div class="card-body">
								<h4>PIGIER-CI</h4>
								<p>Depuis 1956, PIGIER-CI Côte d'ivoire dispenses des formations de qualités</p>
							</div>
						</div>
					</div>
					<div class="col-6 col-md-4">
						<div class="card text-center">
							<img src="img/img-9.jpg" alt="team2" class="card-img-top">
							<div class="card-body">
								<h4></h4>
								<p>PIGIER, MICROSOFT IMAGINE ACADEMY
									Accédez à des programmes d’études pour vous former et vous préparer aux certifications sur
									tous les produits tout au long de votre cursus</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!--- Start Info Section -->
<div id="course" class="offset">
	<div class="col-12 narrow text-center">
		<br><br><br><br><br><br><br>
		<h1></h1><br>
		<p class="lead"></p>
		<a href="#" class="btn btn-outline-primary btn-lg">S'inscrire</a>
	</div>

</div>
<!--- End Info Section -->

<!-- debut section partenaire -->
<div id="portfolio" class="offset">
	<div class="jumbotron container-fluid">

		<div class="col-12 text-center">
			<h3 class="heading">Nos Partenaires</h3>
			<div class="heading-underline"></div>
		</div>

		<div class="row no-padding">
			<div class="col-sm-4">
				<div class="portfolio">
					<a href="img/logo-microsoft.png" target="_blank">
						<img src="img/logo-microsoft.png" alt="">
					</a>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="portfolio">
					<a href="img/Logo-office-365.png" target="_blank">
						<img src="img/Logo-office-365.png" alt="">
					</a>
				</div>
			</div>
		</div><!-- fin du row -->
	</div>
</div>
<!-- fin section Prtenaire -->

<!-- debut info campus -->
<div id="team" class="offset">
	<div class="col-12 text-center">
		<h3 class="heading">INFO CAMPUS</h3>
		<div class="heading-underline"></div>
	</div>

	<div class="row padding">
		<div class="col-md-6">
			<div class="card text-center">
				<img src="img/FOAD.jpg" alt="team1" class="card-img-top">
				<div class="card-body">
					<h4>La formation ouverte à distance (FOAD)</h4>
					<p>Etudiant à pigier depuis deux ans, element perpant</p>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card text-center">
				<img src="img/mbway.jpg" alt="team2" class="card-img-top">
				<div class="card-body">
					<h4>MBway Côte d'ivoire</h4>
					<p>MBway, la business school la plus proche pour aller loin. Des MBA franco britanique et franco americain sous licence de marque MBway</p>
				</div>
			</div>
		</div>
	</div><!-- fin du row campus -->

</div>
<!-- fin info campus -->

<?php
include("pages/footer.php");
?>