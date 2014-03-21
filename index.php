<?php 
//:::: Setting Sessions if Authentication is necessary
session_start();
session_unset();

//:::: Error Checking (comment out for live site)
//error_reporting(E_ERROR | E_PARSE );
//error_reporting(E_ALL);

error_reporting(0);

//:::: File where all necessary include and define actions are performed
require_once "config.php";


//:::: Instantiation of all Classes

$ElegantWeddings = new Layout();
$MainNav = new Navigation("mainNav", "navigation");
$AuthNav = new Navigation("authNav", "authNav");
$FooterNav = new Navigation("footNav", "footerNav" );
$DB = new Database();
$Gallery = new SlickGallery("portfolio");
$Auth = new Authentication();
$Gallery = new FileManager();
//$gallery = new SlickGallery();



//:::: Instantiate all Content Blocks
$container = new Content();
$headerWrapper = new Content();
$header = new Content();
$logo = new Content();
$headerContent = new Content();
$navigation = new Content();
$footNav = new Content();
$footerWrapper = new Content();
$footer = new Content();
$contentWrapper = new Content();
$content = new Content();
$main = new Content();





//:::: Declare ALL Stylesheets Here
$ElegantWeddings->addCSS("style.css");
$ElegantWeddings->addCSS("lightbox.min.css");
$ElegantWeddings->addCSS("files.min.css");
$ElegantWeddings->addCSS("file.min.css");
$ElegantWeddings->addCSS("testimonials.min.css");
$ElegantWeddings->addCSS("allinone_bannerRotator.min.css");
$ElegantWeddings->addCSS("jquery.rondell.min.css");
$ElegantWeddings->addCSS("responsive.min.css");
$ElegantWeddings->addCSS("thumb-scroller.min.css");



//:::: Declare ALL Javascript Here


$ElegantWeddings->addJS("jquery-1.10.2.min.js");
$ElegantWeddings->addJS("jquery-migrate-1.2.1.min.js");
$ElegantWeddings->addJS("jquery-ui.min.js");
$ElegantWeddings->addJS("jquery.ui.touch-punch.min.js");
$ElegantWeddings->addJS("modernizr.custom.53863.js");
$ElegantWeddings->addJS("lightbox-2.6.min.js");
//$ElegantWeddings->addJS("jquery.colorbox-min.js");

$ElegantWeddings->addJS("jquery.validate.min.js");
$ElegantWeddings->addJS("allinone_bannerRotator.js");
$ElegantWeddings->addJS("jquery.thumb-scroller.min.js");
$ElegantWeddings->addJS("scriptLibrary.min.js");


//:::: Declare all Content Blocks
$container->newBlock("container");
$headerWrapper->newBlock("headerWrap");
$header->newBlock("header");
$logo->newBlock("logo");
$headerContent->newBlock("headerContent");
$navigation->newBlock("nav");
$footNav->newBlock("footNav");
$content->newBlock("content");
$main->newBlock("main");
$contentWrapper->newBlock("contentWrap");
$footerWrapper->newBlock("footerWrap");
$footer->newBlock("footer");



//:::: Any site block manipulations here.

//:: Build Main Navigation

$navigation->add($MainNav->buildNav());
$footNav->add($MainNav->buildNav());



//:: Build Header Content
$headerContent->add('<a name="top"></a>');
$logo->add('<img class="logo" src="'.IMG.'EW_logo_new.png" />');
$headerContent->add( fancyBanner() );


//:: Page switch - the page=$value are stored here
include "page/page.switch.php";



$footer->add( drawFooter() );
//:::: NO SITE MANIPULATIONS PAST THIS POINT.

//:::: Join Blocks

//:: Inner Content Blocks
$header->add($logo->buildBlock());
$header->add($headerContent->buildBlock());
$headerWrapper->add($header->buildBlock());
//$contentWrapper->add( drawSocialMediaButtons() );
$content->add($main->buildBlock());
$contentWrapper->add($content->buildBlock());
$contentWrapper->add('<div class="clearfix"></div>');
$footerWrapper->add($footer->buildBlock());

//::Draw the Site Container
$container->add($headerWrapper->buildBlock());
$container->add($navigation->buildBlock());
$container->add($contentWrapper->buildBlock());
$container->add($footerWrapper->buildBlock());


//:::: Start of Page Declarations
echo $ElegantWeddings->setPage();
echo $ElegantWeddings->setHeader();
echo $ElegantWeddings->openBody();


//:::: Body Content Goes Here

echo $container->buildBlock();


//:::: End of Page Declarations

echo $ElegantWeddings->closeBody();
echo $ElegantWeddings->endPage();



//:::: End of Site
?>
