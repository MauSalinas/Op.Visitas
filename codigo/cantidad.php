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

echo "<div>";
echo "<table>";  
$proyecto=$_POST['proyecto'];

if ($proyecto== "SU-1"){$laguna=SUR;} 




echo "<div> Proyecto : ".$proyecto."</div>";

$proyecto=$_POST['proyecto'];
//tomamos los datos del archivo conexion.php  
include("conectar.php");  
$query = "select Fecha_Visita, Supervisor, aditivo1, aditivo2, aditivo3 from Visita WHERE Proyecto='$proyecto' ORDER BY  Fecha_Visita DESC";
$result = mysql_query($query) or die(mysql_error());

//se despliega el resultado  
echo "<br>";
echo "<br>";
echo "<table border=1>";  
echo "<thead>";
echo "<tr>";  
echo "<th>Fecha Visita</th>";
echo "<th>Supervisor</th>";
echo "<th>Aditivo 1</th>";  
echo "<th>Aditivo 2</th>";  
echo "<th>Aditivo 3</th>";       
echo "</thead>";
echo "</tr>";  

while ($row = mysql_fetch_row($result)){   
    echo "<thead>";
    echo "<tr>";  
    echo "<td>$row[0]</td>";  
    echo "<td>$row[1]</td>";  
    echo "<td>$row[2]</td>"; 
    echo "<td>$row[3]</td>";  
    echo "<td>$row[4]</td>";  
    echo "</tr>";  
    echo "</thead>";
}  
echo "</table>";  
echo "</div>";

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
echo "<input type=\"button\" value=\"Volver aditivos\" onClick=\"enviar('aditivos.php')\">\n"; 
echo "</div>\n"; 
echo "\n"; 
echo "</form>\n";
echo "</html>";






}