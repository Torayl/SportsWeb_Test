<?php
function verification($login, $password, &$profil) {
	$hote='localhost';
	$dblogin='root';
	$dbpassword='';
	$bd='sportsweb';
	
	// On se connecte à la base de données
	$link = mysqli_connect($hote, $dblogin, $dbpassword)
		or die ("Erreur de connexion : " . mysql_error());
	mysqli_select_db($link, $bd)
		or die (utf8_encode("Erreur d'accès à la base : ") . $bd);
	
	// On vérifie si le login existe et que le mot de passe correspond
	$select = "SELECT * FROM USER WHERE LOGIN='%s' AND PASSWORD='%s'";
	$req = sprintf($select, $login, $password);
	$res = mysqli_query($link, $req)
		or die (utf8_encode("Erreur de requête : ") . $req);
	
	// Si tout va bien, on retourne true
	if (mysqli_num_rows($res) > 0) {
		$f = utf8_encode("Résultat de la base : <br/>");
		$profil = mysqli_fetch_assoc($res);
		return true;
	}
	// Il y a une erreur dans le login ou le mot de passe, on retourne false
	return false;
}

function inscriptiondb($login, $password, $prenom, $nom, $sexe, $date_naissance) {
	$hote='localhost';
	$dblogin='root';
	$dbpassword='';
	$bd='sportsweb';
	
	// On se connecte à la base de données
	$link = mysqli_connect($hote, $dblogin, $dbpassword)
		or die ("Erreur de connexion : " . mysql_error());
	mysqli_select_db($link, $bd)
		or die (utf8_encode("Erreur d'accès à la base : ") . $bd);
	
	// On vérifie si le nom d'utilisateur n'existe pas déjà
	$select = "SELECT * FROM USER WHERE LOGIN='%s'";
	$req = sprintf($select, $login);
	$res = mysqli_query($link, $req)
		or die (utf8_encode("Erreur de requête : ") . $req);
	// Si c'est le cas, on retourne false
	if (mysqli_num_rows($res) > 0)
		return false;
	
	// Sinon, on crée le nouvel utilisateur, puis on retourne true
	$insert = "INSERT INTO USER VALUES('%s', '%s', '%s', '%s', '%s', '%s')";
	$req = sprintf($insert, $login, $password, $prenom, $nom, $sexe, $date_naissance);
	
	$res = mysqli_query($link, $req)
		or die (utf8_encode("Erreur de requête : ") . $req);
	return true;
}
?>