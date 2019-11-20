<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Castellane Auto </title> 

		<!-- CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css" >

		<!-- JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	</head>

	<body style="font-family: Segoe UI;">

		<div class="fond">
			<div class="formulaire">
				<div>
                    <p class="titre">Inscrivez - vous</p>
                    <p class="sous-titre"> Remplissez le formulaire pour créer votre compte:</p>
				</div>
				<form method='post' action='formulaire-inscription.php'>
					<div style="width: 300px; float: left;">
						<input style="margin-top: 25px;" type="text" placeholder="Nom" name="nomCli">
						<hr class="hr-gauche"/>
						<input type="text" placeholder="Prenom" name="prenomCli">
						<hr class="hr-gauche"/>
						<input type="password" placeholder="Mot de passe" name="mdpCli">
						<hr class="hr-gauche"/>
						<input type="password" placeholder="Confirmer" name="confirmermdpCli">
					</div>
					<div style="width: 300px; float: right;">
						<input style="margin-top: 25px;" type="text" placeholder="E-mail" name="emailCli">
						<hr class="hr-droite"/>
						<input type="text" placeholder="Téléphone" name="telCli">
						<hr class="hr-droite"/>
						<input type="text" placeholder="Adresse" name="adresseCli">
						<hr class="hr-droite"/>
						<input type="text" placeholder="Code postal" name="codepostCli">
					</div>
						<button class="bouton-anim" type="submit" name="Valider">S'inscrire</button>
					</form>
				</form>
			</div>
		</div>

	</body>



	<style type="text/css">
	
	body {
		margin: 0px;
		padding-top: 0px;
		background-color: #f4f4f4;
	}

	.fond {
		position: absolute;
		left: 0px;
		top: 0px;
		padding: 0px;
		margin: 0px;
	}
	.formulaire {
		position: absolute;
		top: 40px;
		left: calc(50em - 300px);
		width: 600px;
		height: 550px;
		border-radius: 8px;
		background: linear-gradient(0deg, #fff 76%, transparent 24%),
    				linear-gradient(90deg, #0ca35e 0%, #134b7b 100%);
    	box-shadow: 5px 10px 25px rgba(0, 0, 0, 0.4);
	}
	.titre {
		font-weight: 700;
		font-size: 60px;
		text-align: center;
		color: #fff;
		margin-top: 26px;
	}
	.sous-titre {
		color: #242931;
		font-weight: 700;

		text-align: center;
		font-size: 18px;
		padding-top: 10px;
	}

	hr {
		position: relative;
		display: block;
	    height: 1px;
	    border-top: 1px solid #eee;
	    padding: 0px;
	    margin-top: 10px;
	    margin-bottom: -13px;
		}

	.hr-gauche {
		margin-left: 40px;
		margin-right: 10px;
	}

	.hr-droite {
		margin-left: 10px;
		margin-right: 40px;
	}

	input {
		padding: 10px;
		display: inline-block;
		margin-top: 22px;
		margin-left: 20px;
		width: calc(84%);
		height: 30px;
		border: none;
		color: #242931;
		font-size: 36px;
		font-family: Segoe UI;
		font-weight: 700;
	}

	input::placeholder {
		font-size: 36px;
		font-weight: 700;
	}

	.bouton-anim {
		background-color: #242931;
  		border-radius: 4px;
  		font-weight: 700;
  		font-family: Segoe UI;
  		color: #ffffff;
  		font-size: 36px;
  		padding: 0px 8px;
  		border: 5px solid transparent;
  		padding-bottom: 3px;
  		transition: all 250ms;
  		cursor: pointer;
  		margin-top: 50px;
  		margin-left: 48px;
		display: inline-block;
		width: calc(84%);
	}

	.bouton-anim:hover {
		background: linear-gradient(to right, #0ca35e, #134b7b);
  		-webkit-background-clip: text;
  		-webkit-text-fill-color: transparent;
  		border-image: linear-gradient(to left, #134b7b, #0ca35e) 1;
  		transition: all 250ms;
	}

	</style>


<?php

if(isset($_POST['Valider']))
{
	$prenomCli = htmlspecialchars(trim($_POST['prenomCli']));
	$nomCli = htmlspecialchars(trim($_POST['nomCli']));
	$mdpCli = htmlspecialchars(trim($_POST['mdpCli']));
	$confirmermdpCli = htmlspecialchars(trim($_POST['confirmermdpCli']));
	$emailCli = htmlspecialchars(trim($_POST['emailCli']));
	$telCli = htmlspecialchars(trim($_POST['telCli']));
	$adresseCli = htmlspecialchars(trim($_POST['adresseCli']));
	$codepostCli = htmlspecialchars(trim($_POST['codepostCli']));
	if ($prenomCli && $nomCli && $mdpCli && $confirmermdpCli && $emailCli && $telCli && $adresseCli && $codepostCli)
	{
		if(strlen($prenomCli) >= 3)
		{
			if(strlen($nomCli) >= 3)
			{
				if (filter_var($emailCli, FILTER_VALIDATE_EMAIL))
				{
    				if (strlen($telCli) == 10)
					{
    					if (strlen($codepostCli) == 5)
						{
    						if(strlen($mdpCli) >= 8)
    						{
    							if($mdpCli == $confirmermdpCli)
    							{
    								$mdpCli = md5($_POST['mdpCli']);
    								try
    								{
    									// On se connecte à MySQL
    									$bdd = new PDO('mysql: host=localhost;dbname=autoecole;charset=utf8', 'root', '');
    								}
    								catch(Exception $e)
    								{
    									// En cas d'erreur, on affiche un message et on arrête tout
    									die('Erreur: '.$e->getMessage());
    								}
    								$query = $bdd->query("insert into client values(null,'".$nomCli."','".$prenomCli."','".$mdpCli."','".$emailCli."',".$telCli.",'".$adresseCli."',".$codepostCli.");");
    								$requete = "insert into client values(null,'".$nomCli."','".$prenomCli."','".$mdpCli."','".$emailCli."','".$telCli."','".$adresseCli."',".$codepostCli.");";
    								echo $requete;
								}else echo "<center>Les mots de passe ne sont pas identiques</center>";
							}else echo "<center> Le mot de passe est trop court ! </center>"; 
						}else echo "<center>Ce code postal est invalide.</center>";
					}else echo "<center>Ce numero est invalide.</center>";	
				}else echo "<center>Cette adresse email est invalide.</center>";
			}else echo "<center>Le nom est trop court !</center>";
		}else echo "<center>Le prénom est trop court !</center>";
	} else echo"<center>Veuillez renseigner tous les champs</center>";
}

?>
</html>