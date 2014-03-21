<?php 
error_reporting(0);

session_destroy();
session_start();

include "../config.php";

$test = new Authentication();


//$test->checkLogin("test@test.ca", "faoro");
//$test->checkLogin("tylor@test.ca", "ampAsss");

switch($_GET['action']){
	default:
		if(!$_SESSION['authenticated']){
			$test->drawLogin();
		}
		
		echo '<br /><br /><br />';
		echo $_SESSION['authenticated'].'<br />';
		echo $_SESSION['name'].'<br />';
		echo $_SESSION['uName'].'<br />';
		
		
	break;
	
	case "logout":
		$test->logout();
		
		header('location: manageTestimonial.php');
		
		echo '<br /><br /><br />';
		echo $_SESSION['authenticated'].'<br />';
		echo $_SESSION['name'].'<br />';
		echo $_SESSION['uName'].'<br />';
	break;	

}






?>