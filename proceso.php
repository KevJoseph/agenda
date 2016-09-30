<?php 
$nombre = $_POST['caja_nombre'];
$apellido = $_POST['caja_apellido'];
$celular = $_POST['caja_celular'];
$correo = $_POST['caja_correo'];

/*Direccion de mi bd*/
 $servidor='localhost';
 $user = 'root';
 $pass ='';
 $bd = 'bd_agenda';

if(!empty($nombre) && !empty($apellido) && !empty($celular) && !empty($correo)){
$conexion = mysql_connect($servidor,$user,$pass) or die ("Problemas al conectar la bd.");
mysql_select_db($bd,$conexion) or die ("No existe esa bd.");

mysql_query("INSERT INTO contactos(nombre,apellido,celular,correo) values('$nombre','$apellido','$celular','$correo')",$conexion);
    header('Location: vista.php');
}
else{
    echo  "Falta completar los campos.";
}

/*Mostrar Lista*/
mysql_query("SELECT * FROM contactos") or die ("No se pudo mostrar la agenda.");

?>
