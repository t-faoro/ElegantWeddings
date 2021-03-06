<?php 
error_reporting(E_ERROR | E_PARSE | E_WARNING);
//error_reporting(0);

session_unset();
session_start();

include "../config.php";



$Auth = new Authentication();
$AdminPages = new Layout();
$AdminContent = new Content();
$AuthNav = new Navigation("authNav", "authnav");
$File = new FileManager();


$AdminPages->addCSS("admin.css");
$AdminPages->addCSS("files.css");
$AdminPages->addJS("jquery-2.0.3.min.js");
$AdminPages->addJS("site.js");


if($Auth->authUser()){
	$container = new Content();
	$header = new Content();
	$logo = new Content();
	$headerContent = new Content();
	$content = new Content();
	$footer = new Content();
	$main = new Content();
	$side = new Content();
	
	$container->newBlock("adminContainer");
	$header->newBlock("adminHeader");
	$logo->newBlock("adminLogo");
	$headerContent->newBlock("adminHeaderContent");
	$content->newBlock("adminContent");
	$main->newBlock("mainContent");
	$side->newBlock("sideContent");
	$footer->newBlock("adminFooter");
	
	switch($_GET['action']){
		default:
			if(!$_SESSION['authenticated']){
				header('location index.php');
				$Auth->drawLogin();
			}
			
	
			
		break;
		
		case "logout":
			$Auth->logout();
			
			header('location: ../index.php');
			
			echo '<br /><br /><br />';
			echo $_SESSION['authenticated'].'<br />';
			echo $_SESSION['name'].'<br />';
			echo $_SESSION['uName'].'<br />';
			 
		break;	
		
	
	}

}
else{
	header('location: index.php');
}

include "page/page.switch.php";
$logo->add('<img class="logo" src="../'.IMG.'eNigma_logo.png" />');

$headerContent->add('<p>Welcome to the admin area <span class="gold right">'.$_SESSION['name'].'</span><br />');
$headerContent->add('<p>You are currently logged in as: <span class="gold right">'.$_SESSION['uName'].'</span><br /><br />');
$headerContent->add('For the site: <a href="../index.php"><span class="gold right">'.$_SESSION['site'].'</span></p></a>');
$headerContent->add(adminSubNav());

$side->add($AuthNav->buildNav());

$header->add($logo->buildBlock());
$header->add($headerContent->buildBlock());

$content->add($main->buildBlock());
$content->add($side->buildBlock());

$container->add($header->buildBlock());
$container->add($content->buildBlock());
//$container->add($footer->buildBlock());


//:::: Start of Page Declarations
echo $AdminPages->setPage();
echo $AdminPages->setHeader(ADMIN_TITLE);
echo $AdminPages->openBody();


//:::: Body Content Goes Here

echo $container->buildBlock();


//:::: End of Page Declarations

echo $AdminPages->closeBody();
echo $AdminPages->endPage();






?>