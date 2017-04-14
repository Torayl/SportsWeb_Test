<?php
function inscription() {
	$login = isset($_POST['login'])?($_POST['login']):'';
	$password = isset($_POST['password'])?($_POST['password']):'';
	$prenom = isset($_POST['prenom'])?($_POST['prenom']):'';
	$nom = isset($_POST['nom'])?($_POST['nom']):'';
	$sexe = isset($_POST['sexe'])?($_POST['sexe']):'';
	$date_naissance = isset($_POST['date_naissance'])?($_POST['date_naissance']):'';
	$msg = '';
	
	if (count($_POST) == 0)
		require ("./index.tpl");
	else {
		require ("./connexionBD.php");
		if (inscriptiondb($login, $password, $prenom, $nom, $sexe, $date_naissance) == true)
			$msg = "Vous avez été inscrit avec succès, " . $prenom . " !";
		else
			$msg ="Ce login est déjà inscrit.";
		require ("./index.tpl");
	}
}
?>