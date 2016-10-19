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
echo "\n"; 
echo "<br>";
echo "<br>";
echo "<form method=\"post\" action=\"contrasena2.php\">\n"; 
echo "\n"; 
echo "Ingrese nueva contraseña: <input type=\"text\" name=\"contrasena\"><br>\n"; 
echo "\n"; 
echo "<br>";
echo "<input type=\"submit\" name=\"name\" value=\"Enviar\"><br>\n"; 
echo "\n"; 
echo "</form>\n";

echo "</html>\n"; 
echo "\n"; 
echo "\n"; 
echo "\n";

}
?>