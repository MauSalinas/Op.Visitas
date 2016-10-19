<?php
session_cache_limiter('public');
session_start();
if(!isset($_SESSION['userid'])) {
}
else {
     echo '<a href="logout.php">Logout</a>';
echo "<html>\n"; 
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>\n"; 
echo "\n"; 
echo "<!--<script lenguage=\"javascript\"> \n"; 
echo "password=prompt(\"Escriba su contraseña y pulse 'Aceptar'\",\"\"); \n"; 
echo "  while(password!=\"Crystal1234\"){ \n"; 
echo "alert(\"La contraseña facilitada no es válida\"); \n"; 
echo "password=prompt(\"Escriba su contraseña\",\"\");\n"; 
echo "} \n"; 
echo "<script lenguage=\"javascript\">-->\n"; 
echo "\n"; 
echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n"; 
echo "<!--<body background=\"http://www.crystal-lagoons.com/es/images/cristal_lagoons/latest_news/crystal-55.jpg\">-->\n"; 
echo "<BODY BGCOLOR=\"skyblue\"> \n"; 
echo "\n"; 
echo "\n"; 
echo "\n"; 
echo "<script>\n"; 
echo "  function confirmar() {\n"; 
echo "    if(confirm(\"¿Realmente desea enviar esta información?\"))\n"; 
echo "    {\n"; 
echo "        return true;\n"; 
echo "    }\n"; 
echo "    return false;\n"; 
echo "}\n"; 
echo "</script>\n"; 
echo "\n"; 
echo "<script type=\"text/javascript\">\n"; 
echo "function pulsar(e) {\n"; 
echo "  tecla = (document.all) ? e.keyCode : e.which;\n"; 
echo "  return (tecla != 13);\n"; 
echo "}\n"; 
echo "</script>\n"; 
echo "\n"; 
echo "<script language=\"JavaScript\">\n"; 
echo "<!--\n"; 
echo "var era;\n"; 
echo "var previo=null;\n"; 
echo "function uncheckRadio(rbutton){\n"; 
echo "if(previo &&previo!=rbutton){previo.era=false;}\n"; 
echo "if(rbutton.checked==true && rbutton.era==true){rbutton.checked=false;}\n"; 
echo "rbutton.era=rbutton.checked;\n"; 
echo "previo=rbutton;\n"; 
echo "}\n"; 
echo "//-->\n"; 
echo "</script>\n"; 
echo "</head>\n"; 
echo "\n"; 
echo "\n"; 
echo "<div><h2><center>Checklist Visitas</center></h2></div>\n"; 
echo " <center><h3><u>Datos Generales</u></h3></center>\n"; 
echo "<form enctype=\"multipart/form-data\" method=\"POST\" action=\"registro.php\"  onkeypress = \"return pulsar(event)\" onsubmit=\"return confirmar()\">\n"; 
echo "\n"; 
echo " <div>Fecha visita: <input type=\"date\" name=\"fecha\" step=\"1\" min=\"2012-03-01\" max=\"2020-12-31\" value=\"\" required></div>\n"; 
echo "<br>\n"; 
echo "<div>Supervisor:\n"; 
include "conectar.php";
$consulta2_mysql='select Nombre,Codigo from usuarios GROUP BY Nombre';
$resultado2_consulta_mysql=mysql_query($consulta2_mysql);
echo "<select name='supervisor' required>";
echo "<option value=''></option>";
while($fila=mysql_fetch_array($resultado2_consulta_mysql)){
echo "<option value='".$fila['Codigo']."'>".$fila['Nombre']."</option>";
}
echo "</select>\n"; 
echo "<br>\n"; 
echo "<br>\n"; 


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
echo "<div class=\"divspoiler\">\n"; 
echo "<a href=\"javascript:void(0);\" onclick=\"if (this.parentNode.nextSibling.childNodes[0].style.display != '') { this.parentNode.nextSibling.childNodes[0].style.display = ''; } else { this.parentNode.nextSibling.childNodes[0].style.display = 'none';}\" \n"; 
echo "><h3><center><u>ÁREA 1</u></center></h3></a>\n"; 
echo "</div><div><div class=\"spoiler\" style=\"display: none;\">\n"; 
echo "\n"; 
echo "   <div>\n"; 
echo "<input type=\"checkbox\" name=\"area1[]\" value=\"PE0101\">No presenta problemas \n"; 
echo "    </div>\n"; 
echo " <div>\n"; 
echo "<input type=\"checkbox\" name=\"area1[]\" value=\"PE0102\">Problema1\n"; 
echo "</div>  \n"; 
echo "<br>\n"; 
echo "<div>\n"; 
echo "Nota:\n"; 
echo " <input type=\"radio\" name=\"nota[]\" value=\"1\" onclick=\"uncheckRadio(this)\"> 1\n"; 
echo "  <input type=\"radio\" name=\"nota[]\" value=\"2\" onclick=\"uncheckRadio(this)\"> 2\n"; 
echo " <input type=\"radio\" name=\"nota[]\" value=\"3\" onclick=\"uncheckRadio(this)\"> 3\n"; 
echo "  <input type=\"radio\" name=\"nota[]\" value=\"4\" onclick=\"uncheckRadio(this)\"> 4\n"; 
echo " <input type=\"radio\" name=\"nota[]\" value=\"5\" onclick=\"uncheckRadio(this)\"> 5\n"; 
echo "</div>\n"; 
echo "<div>\n"; 
echo "Comentario: <input type=\"text\" name=\"comentario\"> \n"; 
echo "</div>\n"; 
echo "</div></div>\n"; 
echo "\n"; 
echo "<div class=\"divspoiler\">\n"; 
echo "<a href=\"javascript:void(0);\" onclick=\"if (this.parentNode.nextSibling.childNodes[0].style.display != '') { this.parentNode.nextSibling.childNodes[0].style.display = ''; } else { this.parentNode.nextSibling.childNodes[0].style.display = 'none';}\" \n"; 
echo "><h3><center><u>ÁREA 2</u></center></h3></a>\n"; 
echo "</div><div><div class=\"spoiler\" style=\"display: none;\">\n"; 
echo "<!-- <div><h3><center><u>área 2.1</u></center></h3> </div>-->\n"; 
echo "\n"; 
echo "<!--primera pregunta-->\n"; 
echo "    <div><b>área 2.1</b></div>\n"; 
echo "<div>\n"; 
echo "<input type=\"checkbox\" name=\"area21[]\" value=\"LF0101\">No presenta problemas \n"; 
echo "    </div>\n"; 
echo "    <div>\n"; 
echo "<input type=\"checkbox\" name=\"area21[]\" value=\"LF0102\">problema 1\n"; 
echo "</div>  \n"; 
echo "    <div>\n"; 
echo "<input type=\"checkbox\" name=\"area21[]\" value=\"LF0103\">problema2\n"; 
echo "    </div> \n"; 
echo "    <div>\n"; 
echo "Otro: <input type=\"text\" name=\"area21otro\"> \n"; 
echo "    </div>\n"; 
echo "       <div>\n"; 
echo "Comentarios: <input type=\"text\" name=\"area21comentarios\"> \n"; 
echo "    </div>\n"; 
echo "<br>\n"; 
echo " \n"; 
echo "<!--segunda pregunta-->\n"; 
echo "    <div><b>área 2.2</b></div>\n"; 
echo "   <div>\n"; 
echo "<input type=\"checkbox\" name=\"area22[]\" value=\"LF0201\">No presenta problemas \n"; 
echo "    </div>\n"; 
echo "    <div>\n"; 
echo "<input type=\"checkbox\" name=\"area22[]\" value=\"LF0202\">problema 1 \n"; 
echo "</div>  \n"; 
echo "    <div>\n"; 
echo "<input type=\"checkbox\" name=\"area22[]\" value=\"LF0203\">problema 2\n"; 
echo "</div>  \n"; 
echo "    <div>\n"; 
echo "Otro: <input type=\"text\" name=\"area22otro\"> \n"; 
echo "    </div>\n"; 
echo "  <div>\n"; 
echo "Comentarios: <input type=\"text\" name=\"area22comentarios\"> \n"; 
echo "    </div>\n"; 
echo " <br>       \n"; 
echo "<b>Evaluación general</b>\n"; 
echo "<br>\n"; 
echo "<div>\n"; 
echo "Nota:\n"; 
echo " <input type=\"radio\" name=\"nota1[]\" value=\"1\" onclick=\"uncheckRadio(this)\"> 1\n"; 
echo "  <input type=\"radio\" name=\"nota1[]\" value=\"2\" onclick=\"uncheckRadio(this)\"> 2\n"; 
echo " <input type=\"radio\" name=\"nota1[]\" value=\"3\" onclick=\"uncheckRadio(this)\"> 3\n"; 
echo "   <input type=\"radio\" name=\"nota1[]\" value=\"4\" onclick=\"uncheckRadio(this)\"> 4\n"; 
echo " <input type=\"radio\" name=\"nota1[]\" value=\"5\" onclick=\"uncheckRadio(this)\"> 5\n"; 
echo "</div>\n"; 
echo "<div>\n"; 
echo "Comentarios: <input type=\"text\" name=\"comentario1\" value=\"\"> \n"; 
echo "</div>\n"; 
echo "</div></div>\n"; 
//
echo "<div class=\"divspoiler\">\n"; 
echo "<a href=\"javascript:void(0);\" onclick=\"if (this.parentNode.nextSibling.childNodes[0].style.display != '') { this.parentNode.nextSibling.childNodes[0].style.display = ''; } else { this.parentNode.nextSibling.childNodes[0].style.display = 'none';}\" \n"; 
echo "><center><h3>Agregar Fotos</h3></center></a>\n"; 
echo "</div><div><div class=\"spoiler\" style=\"display: none;\">\n"; 
echo "<br>\n"; 
echo "    <div><input name=\"userfile\" type=\"file\"></div>\n"; 
echo "    <br>\n"; 
echo "    <div><input name=\"userfile1\" type=\"file\"></div>\n"; 
echo "     <br>\n"; 
echo "    <div><input name=\"userfile2\" type=\"file\"></div>\n"; 
echo "     <br>\n"; 
echo "    <div><input name=\"userfile3\" type=\"file\"></div>\n"; 
echo "     <br>\n"; 
echo "    <div><input name=\"userfile4\" type=\"file\"></div>\n"; 
echo "     <br>\n"; 
echo "   \n"; 
echo "</div></div>     \n"; 

echo "<div class=\"divspoiler\">\n"; 
echo "<a href=\"javascript:void(0);\" onclick=\"if (this.parentNode.nextSibling.childNodes[0].style.display != '') { this.parentNode.nextSibling.childNodes[0].style.display = ''; } else { this.parentNode.nextSibling.childNodes[0].style.display = 'none';}\" \n"; 
echo "><center><h3>Stock de aditivos</h3></center></a>\n"; 
echo "</div><div><div class=\"spoiler\" style=\"display: none;\">\n"; 

echo "    <div>\n"; 
echo "Aditivo 1: <input type=\"text\" name=\"aditivo1\"> \n"; 
echo "    </div> \n"; 
echo "    <div>\n"; 
echo "Aditivo 2: <input type=\"text\" name=\"aditivo2\"> \n"; 
echo "    </div> \n"; 
echo "   <div>\n"; 
echo "Aditivo 3: <input type=\"text\" name=\"aditivo3\"> \n"; 
echo "    </div> \n"; 
echo "    <br>\n"; 
echo "</div></div>     \n"; 

//


echo "        \n"; 
echo "    <div>      \n"; 
echo "<input type=submit onclick=\"pregunta()\" value=\"Enviar\">\n"; 
echo "</div>  \n"; 
echo "     </form>\n"; 
echo "\n"; 
echo "</html>\n"; 
echo "\n"; 
echo "\n"; 
echo "\n";

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