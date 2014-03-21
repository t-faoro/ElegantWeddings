<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_Slick_Gallery = "localhost";
$database_Slick_Gallery = "slick_gallery";
$username_Slick_Gallery = "tylor";
$password_Slick_Gallery = "faoro";
$Slick_Gallery = mysql_pconnect($hostname_Slick_Gallery, $username_Slick_Gallery, $password_Slick_Gallery) or trigger_error(mysql_error(),E_USER_ERROR); 
?>