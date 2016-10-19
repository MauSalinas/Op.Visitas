<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<BODY BGCOLOR="skyblue"> 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php

//área 1

$area1=join(",",$_POST['area1']);

$nota=join(",",$_POST['nota']);
$comentario=$_POST['comentario'];

//área 2
//área 2.1

$area21=join(",",$_POST['area21']);
$area21otro=$_POST['area21otro'];
$area21comentarios=$_POST['area21comentarios'];

//área 2.2
$area22=join(",",$_POST['area22']);
$area22otro=$_POST['area22otro'];
$area22comentarios=$_POST['area22comentarios'];

$nota1=join(",",$_POST['nota1']);
$comentario1=$_POST['comentario1'];

//Operación de sistema de dosificación
$aditivo1=$_POST['aditivo1'];
$aditivo2=$_POST['aditivo2'];
$aditivo3=$_POST['aditivo3'];

//Información General
$fecha=$_POST['fecha'];
$proyecto=$_POST['proyecto'];
$supervisor=$_POST['supervisor'];
$idvisita= $supervisor."-".$proyecto."-".str_replace(array(' ','-'), '', $fecha);


if($_POST['proyecto'] == "")
{
echo "Tiene que ingresar un proyecto<br>";
}
if($_POST['fecha'] == "")
{
echo "Tiene que ingresar una fecha de visita";
}


if($nota1 === NULL) {

$nota1=5;

}
else{
}



if($nota === NULL) {

$nota=5;

}
else{
}
function redondear_dos_decimal($valor) { 
   $float_redondeado=round($valor * 10) / 10; 
   return $float_redondeado; 
}


$promedio= redondear_dos_decimal(0.50*$nota+0.50*$nota1) ;

echo "Los datos han sido ingresado";
include "conectar.php";
$query = "INSERT INTO Visita (ID_Visita, Supervisor, Fecha_Visita, Proyecto, problema_area1, nota_area1,comentario_area1, problema_area21, otro_area21, comentario_area21,
problema_area22, otro_area22, comentario_area22, nota_area2, comentario_area2, aditivo1, aditivo2, aditivo3, Nota_Final)
VALUES ('$idvisita','$supervisor','$fecha','$proyecto','$area1','$nota','$comentario','$area21','$area21otro','$area21comentarios','$area22','$area22otro','$area22comentarios',
'$nota1','$comentario1','$aditivo1','$aditivo2','$aditivo3','$promedio')";
$result = mysql_query($query) or die(mysql_error());
mysql_free_result($result);
mysql_close($conn);

//borrar 
// Los posible valores que puedes obtener de la imagen son:
//echo "<BR>".$_FILES["userfile"]["name"];      //nombre del archivo
//echo "<BR>".$_FILES["userfile"]["type"];      //tipo
//echo "<BR>".$_FILES["userfile"]["tmp_name"];  //nombre del archivo de la imagen temporal
//echo "<BR>".$_FILES["userfile"]["size"];      //tamaño
 /*
$mysqli=new mysqli("opvisitas.crystallagoons.com", "web_opvisitas", "op.43$.98-cl","opvisitas");
if (mysqli_connect_error()) {
    die("Error al conectar: ".mysqli_connect_error());
}
# Comprovamos que se haya subido un fichero
if (is_uploaded_file($_FILES["userfile"]["tmp_name"]))
{
    # verificamos el formato de la imagen
    if ($_FILES["userfile"]["type"]=="image/jpeg" || $_FILES["userfile"]["type"]=="image/pjpeg" || $_FILES["userfile"]["type"]=="image/gif" || $_FILES["userfile"]["type"]=="image/bmp" || $_FILES["userfile"]["type"]=="image/png")
    {
        # Cogemos la anchura y altura de la imagen
        $info=getimagesize($_FILES["userfile"]["tmp_name"]);
        //echo "<BR>".$info[0]; //anchura
        //echo "<BR>".$info[1]; //altura
        //echo "<BR>".$info[2]; //1-GIF, 2-JPG, 3-PNG
        //echo "<BR>".$info[3]; //cadena de texto para el tag <img
 
        # Escapa caracteres especiales
        $imagenEscapes=$mysqli->real_escape_string(file_get_contents($_FILES["userfile"]["tmp_name"]));
 
        # Agregamos la imagen a la base de datos
        $sql="INSERT INTO `imagephp` (anchura,altura,tipo,imagen,ID_Visita) VALUES (".$info[0].",".$info[1].",'".$_FILES["userfile"]["type"]."','".$imagenEscapes."','".$idvisita."')";
        $mysqli->query($sql);
 
        # Cogemos el identificador con que se ha guardado
        $id=$mysqli->insert_id;
 
        # Mostramos la imagen agregada
        echo "<div class='mensaje'>Imagen agregada con el id ".$id."</div>";
    }else{
        echo "<div class='error'>Error: El formato de archivo tiene que ser JPG, GIF, BMP o PNG.</div>";
    }
}


if (is_uploaded_file($_FILES["userfile1"]["tmp_name"]))
{
    # verificamos el formato de la imagen
    if ($_FILES["userfile1"]["type"]=="image/jpeg" || $_FILES["userfile1"]["type"]=="image/pjpeg" || $_FILES["userfile1"]["type"]=="image/gif" || $_FILES["userfile1"]["type"]=="image/bmp" || $_FILES["userfile1"]["type"]=="image/png")
    {
        # Cogemos la anchura y altura de la imagen
        $info=getimagesize($_FILES["userfile1"]["tmp_name"]);
        //echo "<BR>".$info[0]; //anchura
        //echo "<BR>".$info[1]; //altura
        //echo "<BR>".$info[2]; //1-GIF, 2-JPG, 3-PNG
        //echo "<BR>".$info[3]; //cadena de texto para el tag <img
 
        # Escapa caracteres especiales
        $imagenEscapes=$mysqli->real_escape_string(file_get_contents($_FILES["userfile1"]["tmp_name"]));
 
        # Agregamos la imagen a la base de datos
        $sql="INSERT INTO `imagephp` (anchura,altura,tipo,imagen,ID_Visita) VALUES (".$info[0].",".$info[1].",'".$_FILES["userfile1"]["type"]."','".$imagenEscapes."','".$idvisita."')";
        $mysqli->query($sql);
 
        # Cogemos el identificador con que se ha guardado
        $id=$mysqli->insert_id;
 
        # Mostramos la imagen agregada
        echo "<div class='mensaje'>Imagen agregada con el id ".$id."</div>";
    }else{
        echo "<div class='error'>Error: El formato de archivo tiene que ser JPG, GIF, BMP o PNG.</div>";
    }
}


if (is_uploaded_file($_FILES["userfile2"]["tmp_name"]))
{
    # verificamos el formato de la imagen
    if ($_FILES["userfile2"]["type"]=="image/jpeg" || $_FILES["userfile2"]["type"]=="image/pjpeg" || $_FILES["userfile2"]["type"]=="image/gif" || $_FILES["userfile2"]["type"]=="image/bmp" || $_FILES["userfile2"]["type"]=="image/png")
    {
        # Cogemos la anchura y altura de la imagen
        $info=getimagesize($_FILES["userfile2"]["tmp_name"]);
        //echo "<BR>".$info[0]; //anchura
        //echo "<BR>".$info[1]; //altura
        //echo "<BR>".$info[2]; //1-GIF, 2-JPG, 3-PNG
        //echo "<BR>".$info[3]; //cadena de texto para el tag <img
 
        # Escapa caracteres especiales
        $imagenEscapes=$mysqli->real_escape_string(file_get_contents($_FILES["userfile2"]["tmp_name"]));
 
        # Agregamos la imagen a la base de datos
        $sql="INSERT INTO `imagephp` (anchura,altura,tipo,imagen,ID_Visita) VALUES (".$info[0].",".$info[1].",'".$_FILES["userfile2"]["type"]."','".$imagenEscapes."','".$idvisita."')";
        $mysqli->query($sql);
 
        # Cogemos el identificador con que se ha guardado
        $id=$mysqli->insert_id;
 
        # Mostramos la imagen agregada
        echo "<div class='mensaje'>Imagen agregada con el id ".$id."</div>";
    }else{
        echo "<div class='error'>Error: El formato de archivo tiene que ser JPG, GIF, BMP o PNG.</div>";
    }
}

if (is_uploaded_file($_FILES["userfile3"]["tmp_name"]))
{
    # verificamos el formato de la imagen
    if ($_FILES["userfile3"]["type"]=="image/jpeg" || $_FILES["userfile3"]["type"]=="image/pjpeg" || $_FILES["userfile3"]["type"]=="image/gif" || $_FILES["userfile3"]["type"]=="image/bmp" || $_FILES["userfile3"]["type"]=="image/png")
    {
        # Cogemos la anchura y altura de la imagen
        $info=getimagesize($_FILES["userfile3"]["tmp_name"]);
        //echo "<BR>".$info[0]; //anchura
        //echo "<BR>".$info[1]; //altura
        //echo "<BR>".$info[2]; //1-GIF, 2-JPG, 3-PNG
        //echo "<BR>".$info[3]; //cadena de texto para el tag <img
 
        # Escapa caracteres especiales
        $imagenEscapes=$mysqli->real_escape_string(file_get_contents($_FILES["userfile3"]["tmp_name"]));
 
        # Agregamos la imagen a la base de datos
        $sql="INSERT INTO `imagephp` (anchura,altura,tipo,imagen,ID_Visita) VALUES (".$info[0].",".$info[1].",'".$_FILES["userfile3"]["type"]."','".$imagenEscapes."','".$idvisita."')";
        $mysqli->query($sql);
 
        # Cogemos el identificador con que se ha guardado
        $id=$mysqli->insert_id;
 
        # Mostramos la imagen agregada
        echo "<div class='mensaje'>Imagen agregada con el id ".$id."</div>";
    }else{
        echo "<div class='error'>Error: El formato de archivo tiene que ser JPG, GIF, BMP o PNG.</div>";
    }
}


if (is_uploaded_file($_FILES["userfile4"]["tmp_name"]))
{
    # verificamos el formato de la imagen
    if ($_FILES["userfile4"]["type"]=="image/jpeg" || $_FILES["userfile4"]["type"]=="image/pjpeg" || $_FILES["userfile4"]["type"]=="image/gif" || $_FILES["userfile4"]["type"]=="image/bmp" || $_FILES["userfile4"]["type"]=="image/png")
    {
        # Cogemos la anchura y altura de la imagen
        $info=getimagesize($_FILES["userfile4"]["tmp_name"]);
        //echo "<BR>".$info[0]; //anchura
        //echo "<BR>".$info[1]; //altura
        //echo "<BR>".$info[2]; //1-GIF, 2-JPG, 3-PNG
        //echo "<BR>".$info[3]; //cadena de texto para el tag <img
 
        # Escapa caracteres especiales
        $imagenEscapes=$mysqli->real_escape_string(file_get_contents($_FILES["userfile4"]["tmp_name"]));
 
        # Agregamos la imagen a la base de datos
        $sql="INSERT INTO `imagephp` (anchura,altura,tipo,imagen,ID_Visita) VALUES (".$info[0].",".$info[1].",'".$_FILES["userfile4"]["type"]."','".$imagenEscapes."','".$idvisita."')";
        $mysqli->query($sql);
 
        # Cogemos el identificador con que se ha guardado
        $id=$mysqli->insert_id;
 
        # Mostramos la imagen agregada
        echo "<div class='mensaje'>Imagen agregada con el id ".$id."</div>";
    }else{
        echo "<div class='error'>Error: El formato de archivo tiene que ser JPG, GIF, BMP o PNG.</div>";
    }
}
*/
//


echo '<div><a href="index.php" title="Ir la página anterior">Volver</a></div>';



?>


</html>







