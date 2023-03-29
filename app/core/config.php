<?php 

define("WEBSITE_TITLE", 'VotoOn');

//database name
if($_SERVER['SERVER_NAME'] == "localhost")
{
	define('DB_NAME', "voton");
	define('DB_USER', "root");
	define('DB_PASS', "");
	define('DB_TYPE', "mysql");
	define('DB_HOST', "localhost");	
}else
{
	define('DB_NAME', "");
	define('DB_USER', "");
	define('DB_PASS', "");
	define('DB_TYPE', "mysql");
	define('DB_HOST', "localhost");
}

define('THEME','voton/');

define('DEBUG', true);

if(DEBUG){

	ini_set('display_errors', 1);
}else{
	ini_set('display_errors', 0);
}