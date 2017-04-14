<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="js/script.js"></script>
        <title>Test technique</title>
    </head>
    <body>
		<div id="main">
			<section id="connexion">
				<form name="connexion" action="index.php?controle=connexion" method="post">
					<fieldset>
						<div class="wrap">
							<label for="login">Adresse e-mail ou mobile</label>
							<input type="text" name="login" placeholder="Votre login" required />
						</div>
						<div class="wrap">
							<label for="password">Mot de passe</label>
							<input type="password" name="password" placeholder="Votre mot de passe" required />
							<a href="">Informations de compte oubliées ?</a>
						</div>
						<br /><input type="submit" value="Connexion" name="connexion" />
					</fieldset>
				</form>
			</section>
			<div class="erreur"><?php echo $msg; ?></div>
			<section id="inscription">
				<h1>Inscription</h1>
				<p>C'est gratuit (et ça le restera toujours)</p>
				<form name="inscription" action="index.php?controle=inscription" method="post">
					<fieldset>
						<div class="wrap">
							<input class="small" name="prenom" type="text" placeholder="Prénom" required />
							<input class="small" name="nom" type="text" placeholder="Nom de famille" required />
						</div>
						<input type="text" name="login" id="login" placeholder="Numéro de mobile ou e-mail" onkeyup="vérifierLogin();" required />
						<input type="text" name="confirmlogin" id="confirmlogin" placeholder="Confirmer numéro de mobile ou e-mail" onkeyup="vérifierLogin();" required />
						<input type="password" name="password" placeholder="Nouveau mot de passe" required />
						<div class="wrap">
						<p>Date de naissance</p>
							<input type="date" name="date_naissance" required />
							<a href="">Pourquoi indiquer ma date de naissance ?</a>
						</div>
						<div class="wrap">
							<input type="radio" name="sexe" value="femme" required />
							<label for="sexe">Femme</label>
							<input type="radio" name="sexe" value="homme" required />
							<label for="sexe">Homme</label>
						</div>
						
						<p class="infos">En cliquant sur Inscription, vous acceptez nos <a href="">Conditions</a> et
						indiquez que vous avez lu notre <a href="">Politique d'utilisation des
						données</a>, y compris notre <a href="">Utilisation des cookies</a>. Vous
						pourrez recevoir des notifications par texto de la part de
						Facebook et pouvez vous désabonner à tout moment.</p>
						<input type="submit" value="Inscription" name="inscription" />
					</fieldset>
				</form>
			</section>
		</div>
    </body>
</html>