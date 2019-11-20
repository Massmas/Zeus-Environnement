<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Castellane Auto </title> 

		<!-- CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">

		<!-- JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	</head>

	<body style="font-family: Segoe UI;">



		<!-- header -->
		<header style="box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1); border: 1px solid #d6d6d6; position: sticky; top: 0; background-color: #FFF; z-index: 100">
			<nav>
				<a class="nav1 lien1" href="agences.php">Agences</a>
				<a class="nav1" href="permis.php">Permis</a>
				<a class="nav1" href="a-propos.php">A propos</a>
			</nav>
			<a href="index.php"><img style="position: absolute; top: 0; bottom:0; left: 0; right:0; margin: auto;" src="img/logofinal.png" height="51.55"></a>
			<div class="menu-depliant">
				<div class="icone"></div>
				<p class="titre-formulaire-connexion"> Connexion </p>
				<input style="margin-top: 53px;" type="text" placeholder="Nom" name="nom">
				<hr/>
				<input type="text" placeholder="Prenom" name="prenom">
				<hr/>
				<input type="text" placeholder="E-mail" name="mail">
				<hr/>
				<input type="password" placeholder="Mot de passe" name="mdp">
				<button class="bouton-anim">Se connecter</button>
				<center><a class="lien-formulaire-inscription" href="formulaire-inscription.php">Pas encore inscrit ?</a></center>
			</div>
			<script type="text/javascript">
				$(document).ready(function(){
					$('.icone').click(function(){
						$('.menu-depliant').toggleClass('active')
					})
				})
			</script>
		</header>


		<!-- permis -->
		<div>
			<!-- detail -->
			<center>
				<div style="background: linear-gradient(to bottom right, #333, #222); margin-bottom: 50px; margin-left: 15px; margin-right: 15px;">
					<div style="display: inline-block;">
						<div style="border-bottom: 3px solid #fff;" width="70" height="3"></div>
						<h2 class="formule" style="color: #fff; padding-top: 50px;"><b>NOS FORMULES AUTO</b></h2>
						<div style="border-bottom: 3px solid #fff;" width="70" height="3"></div>
					</div>
					<nav style="position: relative; margin-bottom: -3px;">
						<div class="mtl pres-permis col-lg-3" style="padding-bottom: 17.6px;">
							<a style="color: #222;" href="#accelere">
								<h3 style="font-weight: 600;"> PERMIS B </h3>
								<em style="color: #666;">Une formule en toute simplicité</em><br/>
								<h2><b>675 €</b></h2>
							</a>
						</div>
						<div class="mtl pres-permis col-lg-3" style="padding-bottom: 0px; padding-top: 0px;">
							<a style="color: #222;" href="#classique">
								<h3 style="font-weight: 600;"> CONDUITE ACCOMPAGNEE </h3>
								<em style="color: #666;">Apprenez à conduire dès 15 ans</em><br/>
								<h2><b>882 €</b></h2>
							</a>
						</div>
						<div class="mtl pres-permis col-lg-3"  style="padding-bottom: 17.6px;">
							<a style="color: #222;" href="#jeune">
								<h3 style="font-weight: 600;"> PERMIS ACCELERE </h3>
								<em style="color: #666;">Une formation en moins de 30 jours !</em><br/>
								<h2><b>963 €</b></h2>
							</a>
						</div>
						<br/>
					</nav>

			<!-- descriptions -->
					<div class="mbl">
						<div class="mbl desc-permis col-lg-3">
							<h2 style="padding-bottom: 5px; font-weight: 600; border-bottom: 2px solid #222"> Avantages </h2>
							<p><em style="float: left; margin-left: -50px;">
								<ul style="line-height: 2.75em; list-style-image: url('img/tick25.png'); margin-left: 20px;">
									<li style="border-bottom: 1px solid #d6d6d6;">&nbsp&nbsp Avantage 1</li>
									<li style="border-bottom: 1px solid #d6d6d6;">&nbsp&nbsp Avantage 2</li>
									<li style="border-bottom: 1px solid #d6d6d6;">&nbsp&nbsp Avantage 3</li>
									<li style="border-bottom: 1px solid #d6d6d6;">&nbsp&nbsp Avantage 4</li>
									<li>&nbsp&nbsp Avantage 5</li>
								</ul>
							</em></p>
						</div>
						<div class="mbl desc-permis col-lg-3">
							<h2 style="padding-bottom: 5px; font-weight: 600; border-bottom: 2px solid #222"> Avantages </h2>
							<p><em style="float: left; margin-left: -50px;">
								<ul style="line-height: 2.75em; list-style-image: url('img/tick25.png'); margin-left: 20px;">
									<li style="border-bottom: 1px solid #d6d6d6;">&nbsp&nbsp Avantage 1</li>
									<li style="border-bottom: 1px solid #d6d6d6;">&nbsp&nbsp Avantage 2</li>
									<li style="border-bottom: 1px solid #d6d6d6;">&nbsp&nbsp Avantage 3</li>
									<li style="border-bottom: 1px solid #d6d6d6;">&nbsp&nbsp Avantage 4</li>
									<li>&nbsp&nbsp Avantage 5</li>
								</ul>
							</em></p>
						</div>
						<div class="mbl desc-permis col-lg-3">
							<h2 style="padding-bottom: 5px; font-weight: 600; border-bottom: 2px solid #222"> Avantages </h2>
							<p><em style="float: left; margin-left: -50px;">
								<ul style="line-height: 2.75em; list-style-image: url('img/tick25.png'); margin-left: 20px;">
									<li style="border-bottom: 1px solid #d6d6d6;">&nbsp&nbsp Avantage 1</li>
									<li style="border-bottom: 1px solid #d6d6d6;">&nbsp&nbsp Avantage 2</li>
									<li style="border-bottom: 1px solid #d6d6d6;">&nbsp&nbsp Avantage 3</li>
									<li style="border-bottom: 1px solid #d6d6d6;">&nbsp&nbsp Avantage 4</li>
									<li>&nbsp&nbsp Avantage 5</li>
								</ul>
							</em></p>
						</div>
						<br/><br/><br/>
					</div>
				</div>
			</center>
		</div>



		<!-- footer #090a3c, #0b7739 // #134b7b, #0ca35e-->
		<section class="container-fluid footer">
			<br/><br/>
			<div style="background: linear-gradient(to bottom right, #333, #222); box-shadow: inset 0px 0px 25px 5px rgba(0, 0, 0, 0.3);">
				<center><img src="img/logohdbl.png" height="75" style="margin-top: 25px; margin-bottom: 50px;"></center>
				<div style="position: relative;">
					<center>
						<img src="img/barre.png" style="margin-bottom: 10px;">
						<nav style="z-index: 100; padding-bottom: 25px;">
							<a class="nav2" href="">Haut de page</a>
							
							<a class="nav2" href="agences.php">Agences</a>
							
							<a class="nav2" href="permis.php">Permis</a>
							
							<a class="nav2" href="contact.php">Contact</a>
							
							<a class="nav2" href="a-propos.php">A propos</a>
						</nav>
						<a href="www.fbb.fr"><img class="logo-fbb" src="img/logofbb.png" height="50px" width="50px" style="float: right; margin-right: 15px; position: relative; bottom: 65px;"></a>
					</center>
				</div>
			</div>
		</section>

	</body>
</html>