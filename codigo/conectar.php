<?php 
// datos para la coneccion a mysql 
define('DB_SERVER','sql200.260mb.net'); 
define('DB_NAME','n260m_19043332_1'); 
define('DB_USER','n260m_19043332'); 
define('DB_PASS','serena'); 

$con = mysql_connect(DB_SERVER,DB_USER,DB_PASS); 
mysql_select_db(DB_NAME,$con); 
?>