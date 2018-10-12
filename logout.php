<?php

	// FERMETURE DE LA SESSION PHP
	session_start();
	$_SESSION = array();
	session_destroy();
	
	 $chemin_redir="index.php";
	header("Refresh: 2;url=".$chemin_redir); 

?>
