<?php
include "adminFunctions/adminFunctions.php";


switch($_GET['page']){
	default:	
	$main->add("<h3>Please select a page to manage from the menu on the left.</h3>");	
	
	break;
	
	case "home":	
	$main->add("<h1>Manage Home Page</h1>");	
	break;
	
	case "story":	
	$main->add("<h1>Manage Story</h1>");	
	break;
	
	case "testimonial":	
	$main->add("<h1>Manage Testimonial</h1>");
	//$main->add( $File->uploadProcess() );	
	break;
	
	case "packages":
	$main->add("<h1>Manage Packages</h1>");
	break;
	
	case "portfolio":
	$main->add("<h1>Manage Portfolio</h1>");
	$main->add( $File->uploadProcess() );	
	break;
	
	case "promotions":
	$main->add("<h1>Manage Promotions</h1>");
	break;
	
	case "contact":
	$main->add("<h1>Manage Contact</h1>");
	break;
}



?>