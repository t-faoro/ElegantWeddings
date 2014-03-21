<?php 

//:: Misc. System Constants
define(HOME_PAGE, 86);
define(NOT_HOME, 0);


ini_set('session.gc_maxlifetime', 1800);
//:: Make any required contant declarations

//:: If your Email Changes, Change this to the new email address.
define(ADMIN_EMAIL, "andrea@elegantweddingsevents.com");

define(CSS_PATH, "./style/");
define(JS_PATH, "./javascript/");
define(IMG, "./images/");
define(USER_FILE, "./Galleries/");

define(DOCTYPE, "<!DOCTYPE html>");
define(TITLE, "Elegant Weddings & Events");
define(ADMIN_TITLE, "Administration Page");

define(FACEBOOK, "https://www.facebook.com/ElegantWeddingsEventsLethbridge");
define(TWITTER, "https://twitter.com/EWAELethbridge");


//:: Include ALL Classes to be used by the Script
include_once "include/connection.class.php";
include_once "include/layout.class.php";
include_once "include/content.class.php";
include_once "include/navigation.class.php";
require_once "include/database.class.php";
include_once "include/slickGallery.class.php";
include_once "include/authentication.class.php";
include_once "include/testimonials.class.php";
include_once "include/fileManager.class.php";
//include_once "include/image.class.php";

//:: Other Includes
//include_once "page/page.switch.php";
include "functions/pageFunctions.php";

//:: Misc. Functions
//include_once "functions/customFunctions.php";



?>