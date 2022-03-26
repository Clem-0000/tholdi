<?php session_start();
include_once 'gestion.base.inc.php';
	$user=$_POST['user'];
	$mdp=$_POST['mdp'];
	$test=verification($user, $mdp);
	
if($test==true)
{
    $_SESSION['user']=$user;
    $_SESSION['mdp']=$mdp;
	$_SESSION['codeUtilisateur'] = getCodeUtilisateur($user,$mdp);
	header("location: reservation.php");
}
else{ 
	header("location: connexion.php");
}
