<?php
session_cache_limiter('public');
session_start();
if(!isset($_SESSION['userid'])) {
}
else {
echo '<a href="logout.php">Logout</a>'; 
echo "<html>\n"; 
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>\n"; 
echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n"; 
echo "<BODY BGCOLOR=\"skyblue\"> \n"; 
echo "<div><h2><center>Cantidad de aditivos</center></h2></div>\n"; 
echo " <center><h3><u>Seleccionar proyecto</u></h3></center>\n"; 
echo "<form method=\"POST\" action=\"cantidad.php\">\n"; 
echo "\n"; 
echo "<div>Proyecto:\n"; 
include "conectar.php";
$consulta2_mysql='select Nombre,Codigo from Proyecto GROUP BY Nombre';
$resultado2_consulta_mysql=mysql_query($consulta2_mysql);
echo "<select name='proyecto' required>";
echo "<option value=''></option>";
while($fila=mysql_fetch_array($resultado2_consulta_mysql)){
echo "<option value='".$fila['Codigo']."'>".$fila['Nombre']."</option>";
}
echo "</select>\n"; 
echo "</div>\n";
echo "<br>\n"; 
 echo "<div><input type=\"submit\" name=\"Enviar\"></div>\n";
echo "</form>";
echo "</html>\n";

echo "<br>";

echo "\n"; 
echo "<script language=\"javascript\" type=\"text/javascript\">\n"; 
echo "function enviar(pagina){\n"; 
echo "document.nombreDelFormulario.action = pagina;\n"; 
echo "document.nombreDelFormulario.submit();\n"; 
echo "\n"; 
echo "}\n"; 
echo "</script>\n"; 
echo "\n"; 
echo "<form name=\"nombreDelFormulario\" action=\"\" method=\"post\">\n"; 
echo "<div>\n"; 
echo "<input type=\"button\" value=\"Volver a Menu\" onClick=\"enviar('index.php')\">\n"; 
echo "</div>\n"; 
echo "\n"; 
echo "</form>\n";


}



?>