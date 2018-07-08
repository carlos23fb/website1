<?php 

$conexion =mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);


if (mysqli_connect_errno()) {

	echo "<p>Failed to connect to Mysql<p>";
}else{

	echo "<p>Conexion a la base de datos con exito <p>";


}



?>