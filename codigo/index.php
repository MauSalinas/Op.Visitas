<?php //Lenguaje php
session_start(); 
include_once "conexion2.php"; 
if (ereg("[^A-Za-z0-9]+",$_POST['user'])) {
     header("location:index.php");
    ;
}
else{
 
function verificar_login($user,$password,&$result) { 
    $sql = "SELECT * FROM usuarios WHERE usuarios = '$user' and password = '$password'";
    $rec = mysql_query($sql); 
    $count = 0; 
  
    while($row = mysql_fetch_object($rec)) 
    { 
        $count++; 
        $result = $row; 
    } 
  
    if($count == 1) 
    { 
        return 1; 
    } 
  
    else 
    { 
        return 0; 
    } 
} 
  
if(!isset($_SESSION['userid'])) 
{ 
    if(isset($_POST['login'])) 
    { 
        if(verificar_login($_POST['user'],$_POST['password'],$result) == 1) 
        { 
            $_SESSION['userid'] = $result->idusuarios; 
            header("location:index.php"); 
        } 
        else 
        { 
            echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>'; 
        } 
    } 
?> 
  
<style type="text/css"> 
*{ 
    font-size: 14px; 
} 
body{ 
background:#0fbff2; 
} 
form.login { 
    background: none repeat scroll 0 0 #F1F1F1; 
    border: 1px solid #DDDDDD; 
    font-family: sans-serif; 
    margin: 0 auto; 
    padding: 20px; 
    width: 278px; 
    box-shadow:0px 0px 20px black; 
    border-radius:10px; 
} 
form.login div { 
    margin-bottom: 15px; 
    overflow: hidden; 
} 
form.login div label { 
    display: block; 
    float: left; 
    line-height: 25px; 
} 
form.login div input[type="text"], form.login div input[type="password"] { 
    border: 1px solid #DCDCDC; 
    float: right; 
    padding: 4px; 
} 
form.login div input[type="submit"] { 
    background: none repeat scroll 0 0 #DEDEDE; 
    border: 1px solid #C6C6C6; 
    float: right; 
    font-weight: bold; 
    padding: 4px 20px; 
} 
.error{ 
    color: red; 
    font-weight: bold; 
    margin: 10px; 
    text-align: center; 
} 
</style> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<form action="" method="post" class="login"> 
    <div><label>Username</label><input name="user" type="text" ></div> 
    <div><label>Password</label><input name="password" type="password"></div> 
    <div><input name="login" type="submit" value="login"></div> 
</form> 

<?php 
} else 
    {

    echo '<a href="logout.php">Logout</a>'; 
echo "<html>\n"; 
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>\n"; 
echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n"; 
echo "<BODY BGCOLOR=\"skyblue\"> \n"; 
  echo "<center><div><a href=\"aditivos.php\" target=\"_self\"> <input type=\"button\" name=\"boton\" value=\"Aditivos\" /> </a>\n </div></center>"; 
echo "<br>";
echo "<center><div><a href=\"checklist.php\" target=\"_self\"> <input type=\"button\" name=\"boton\" value=\"Checklist\" /> </a>\n</div></center>"; 
echo "<br>";
echo "<center><div><a href=\"subirimagen.php\" target=\"_self\"> <input type=\"button\" name=\"boton\" value=\"Adjuntar Imágenes\" /> </a>\n</div></center>"; 
echo "<br>";
echo "<center><div><a href=\"verimagen.php\" target=\"_self\"> <input type=\"button\" name=\"boton\" value=\"Ver Imágenes\" /> </a>\n</div></center>"; 
echo "<br>";
echo "<center><div><a href=\"contrasena.php\" target=\"_self\"> <input type=\"button\" name=\"boton\" value=\"Cambiar contraseña\" /> </a></div></center>";
//Conexion con la base
mysql_connect("opvisitas.crystallagoons.com","web_opvisitas","op.43$.98-cl");

//selección de la base de datos con la que vamos a trabajar 
mysql_select_db("opvisitas"); 
//Creamos la sentencia SQL y la ejecutamos
$sSQL="update usuarios Set password='$contrasena' where usuarios='$result->idusuarios'";
mysql_query($sSQL);

} 
}
?>
