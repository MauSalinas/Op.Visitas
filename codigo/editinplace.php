<?php
session_start();

$idrendicion=$_SESSION['rendicion'];


?>

<?php
header("Content-Type: text/html;charset=utf-8");
$dbhost="server";
$dbname="dbname";
$dbuser="user";
$dbpass="password";
$db = new mysqli($dbhost,$dbuser,$dbpass,$dbname);



if (isset($_POST) && count($_POST)>0)
{
	if ($db->connect_errno) 
	{
		die ("<span class='ko'>Fallo al conectar a MySQL: (" . $db->connect_errno . ") " . $db->connect_error."</span>");
	}
	else
	{
            
		$query=$db->query("update Matriz_Rendicion set ".$_POST["campo"]."='".$_POST["valor"]."' where id='".intval($_POST["id"])."' limit 1");
                if ($query) echo "<span class='ok'>Valores modificados correctamente.</span>";
		else echo "<span class='ko'>".$db->error."</span>";
                mysql_query ("SET NAMES 'utf8'");
	}
}

if (isset($_GET) && count($_GET)>0)
{
	if ($db->connect_errno) 
	{
		die ("<span class='ko'>Fallo al conectar a MySQL: (" . $db->connect_errno . ") " . $db->connect_error."</span>");
	}
	else
	{
		//$query=$db->query("select id, Origen,Proyecto, Fecha_Visita, Categoria, Monto_Unitario, Cantidad, Monto_Total, Moneda, Descripcion from Matriz_Rendicion order by id");
		$query=$db->query("select * from Table  where Columna='$restriccion' order by columna");
                $datos=array();
		while ($usuarios=$query->fetch_array())
		{
			$datos[]=array(	"Descripcion"=>$usuarios["Descripcion"], //Ejemplos
                                                        "Origen"=>$usuarios["Origen"],
                                                         "Proyecto"=>$usuarios["Proyecto"],
                                                          "Fecha_Visita"=>$usuarios["Fecha_Visita"],
   "Categoria"=>$usuarios["Categoria"],
   "id"=>$usuarios["id"],
   "Monto_Unitario"=>$usuarios["Monto_Unitario"],
  "Cantidad"=>$usuarios["Cantidad"],
  "Monto_Total"=>$usuarios["Monto_Total"],
  "Moneda"=>$usuarios["Moneda"]
			);
		}
		echo json_encode($datos);
                mysql_query ("SET NAMES 'utf8'");
	}
}
?>	