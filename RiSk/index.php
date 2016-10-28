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
			
			<div class="slider">
				<ul class="slides">
					<li>
						<div class="caption center-align">
							<img src="assets/imgs/site/datainside.png">
							<h3>Protégeons notre pays</h3>
							<h5 class="light grey-text text-lighten-3">de la cybercriminalité</h5>
						</div>
					</li>
					<li>
						<div class="caption center-align">
							<h3>Explosion des fraudes</h3>
							<h5 class="light grey-text text-lighten-3">en entreprise</h5>
						</div>
					</li>
					<li>
						<div class="caption center-align">
							<h3>This is our big Tagline!</h3>
							<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
						</div>
					</li>
					<li>
						<div class="caption center-align">
							<h3>This is our big Tagline!</h3>
							<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
						</div>
					</li>

				</ul>
			</div>	
		</div>

		<div class="section-suivant">
			<img src="assets/imgs/site/next-page.png">
		</div>

	<!-- CORPS -->
		<div class="corps">

		</div>
		<?php 
			include_once 'includesPages/insertScript.php';
		?>
	</div>
</body>
</html>