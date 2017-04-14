<?php 
session_start();

if (isset($_GET['controle'])) {
	$controle = $_GET['controle'];
	require ('./' . $controle . '.php');
	$controle();
} else  {
	require ("./connexion.php");
	connexion();
}
?>