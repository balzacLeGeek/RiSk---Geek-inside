<?php 
	include_once 'config/configPages.php';
?>
<!DOCTYPE html>
<html>
<head>
	<?php 
		include_once 'includesPages/insertHead.php';
	?>
</head>
<body>
	<div class="cadrePage">

	<!-- HEADER -->
		<div class="row header">
			<div class="navbar-fixed">
				<nav>
					<div class="nav-wrapper">
						<a href="#!" class="brand-logo">
							<img src="assets/imgs/site/logoRiSkSite.png">
						</a>
						<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
						<ul class="right hide-on-med-and-down">
							<li class="active"><a href="">Accueil</a></li>
							<li><a href="">Cybercriminalité</a></li>
							<li><a href="">Cybersécurité</a></li>
							<li><a href="">Blog</a></li>
						</ul>
						<ul class="side-nav" id="mobile-demo">
							<li class="active"><a href="">Accueil</a></li>
							<li><a href="">Cybercriminalité</a></li>
							<li><a href="">Cybersécurité</a></li>
							<li><a href="">Blog</a></li>
						</ul>
					</div>
				</nav>
			</div>

			<div class="row message-accueil">
				<div class="col s12 m8 offset-m2 l8 offset-l2 center-align animated flipInX">
					<div class="carousel">
						<a class="carousel-item" href="#one!"><img src="assets/imgs/site/logoAccueil.png" class="responsive-img animated flipInY"></a>
						<a class="carousel-item" href="#two!"><img src="assets/imgs/site/logoAccueil.png" class="responsive-img animated flipInY"></a>
						<a class="carousel-item" href="#three!"><img src="assets/imgs/site/logoAccueil.png" class="responsive-img animated flipInY"></a>
						<a class="carousel-item" href="#three!"><img src="assets/imgs/site/logoAccueil.png" class="responsive-img animated flipInY"></a>
						<a class="carousel-item" href="#three!"><img src="assets/imgs/site/logoAccueil.png" class="responsive-img animated flipInY"></a>
					</div>
					<h4 class="white-text text-darken-3">La sécurité de vos données nous est précieux<br>
					<span class="x-small">Contre toutes formes de cybercriminalité <br></span>
					<span class="grey-text small">Fraude - Espionnage - Escroquerie - Piratage - Détournement de données confidentielle - Usurpation d'identité</span>
					</h4>
				</div>
				<div class="col s12 m12 l12 center-align animated slideInUp cadre-telechargement">
					<a class="waves-effect waves-light btn">
						<span class="icon fa fa-windows btn-plateforme"></span> 
						<span class="plateforme">
							Windows
						</span>
						<span class="version-plateforme">
							<!-- Xp - Vista - 7 - 8 et 10 -->
							32bits / 64 bits
						</span> 
					</a>
					<a class="waves-effect waves-light btn">
						<span class="icon fa fa-linux btn-plateforme"></span> 
						<span class="plateforme">
							LINUX
						</span>
						<span class="version-plateforme">
							32bits / 64 bits
						</span> 
					</a>
				</div>
			</div>
		</div>

		<div class="section-suivant">
			<a href="#corps">
				<img src="assets/imgs/site/next-page.png">
			</a>
		</div>

	<!-- CORPS -->
		<div id="corps" class="corps">

		</div>
		<?php 
			include_once 'includesPages/insertScript.php';
		?>
	</div>
</body>
</html>