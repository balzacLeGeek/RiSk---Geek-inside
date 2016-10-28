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
						<a href="#!" class="brand-logo">Logo</a>
						<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
						<ul class="right hide-on-med-and-down">
							<li><a href="">Accueil</a></li>
							<li><a href="">Cybercriminalité</a></li>
							<li><a href="">Cybersécurity</a></li>
						</ul>
						<ul class="side-nav" id="mobile-demo">
							<li><a href="">Accueil</a></li>
							<li><a href="">Les RiSk</a></li>
							<li><a href="">Javascript</a></li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="row	message-accueil">
				<div class="col s12 m4 offset-m4 l6 offset-l3 center-align">
					<h4 class="light-blue-text text-darken-1 animated fadeInUp">
						
					</h4>
				</div>
			</div>
			
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