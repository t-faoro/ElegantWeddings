<?php 
session_unset();
session_start();
//error_reporting(E_ERROR | E_PARSE | E_WARNING);
error_reporting(0);

include "../config.php";
$Auth = new Authentication();


	if(!$_SESSION['authenticated']){
		$Auth->drawLogin();

	}
	else{
		header('location: managePages.php');
	}
	
	


?>