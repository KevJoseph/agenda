<?php
 $servidor='localhost';
 $user = 'root';
 $pass ='';
 $bd = 'bd_agenda';
 
$conexion = mysql_connect($servidor,$user,$pass) or die ("Problemas al conectar la bd.");
mysql_select_db($bd,$conexion) or die ("No existe esa bd.");

$registro = mysql_query("Select * from contactos") or die ("Hubo un error de ".mysql_error());

?>