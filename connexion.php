<?php
function connexion() {
	$login = isset($_POST['login'])?($_POST['login']):'';
	$password = isset($_POST['password'])?($_POST['password']):'';
	$msg = '';
	
	if (count($_POST) == 0)
		require ("./index.tpl");
	else {
		require ("./connexionBD.php");
		if (verification($login, $password, $profil) == true) {
			$_SESSION['profil'] = $profil;
			$msg = "Connexion réussie. Bienvenue, " . $login . " !";
		} else
			$msg = "Login ou mot de passe incorrect.";
		require ("./index.tpl");
	}
}
?>