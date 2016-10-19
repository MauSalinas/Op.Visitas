<?php
session_start();
if(!isset($_SESSION['userid']))     
    {
}
else {
    $id= $_SESSION['userid'];
   $contrasena=$_POST['contrasena'];

//Conexion con la base
mysql_connect("sql200.260mb.net","n260m_19043332","serena");
//selección de la base de datos con la que vamos a trabajar 
mysql_select_db("n260m_19043332_1"); 
//Creamos la sentencia SQL y la ejecutamos
$sSQL="update usuarios Set password='$contrasena' where idusuarios='$id'";
mysql_query($sSQL);
 header("location:index.php");     
}

?>

