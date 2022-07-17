<?php
include('../../personal/config/conexion.php');
session_start();
			//------------------BITACORA-------------------------------------
$accion='cerro sesion';
$ejecutor=$_SESSION['nombre_usu_lg'] ;

$sql_insert2="INSERT INTO `bitacora`(`accion`,`ejecutor`) 
VALUES ( '$accion','$ejecutor')";
$resultado_usu2=$mysqli->query($sql_insert2);
//------------------------------------------------------------------------
	session_unset();

	
	session_destroy();
	
	header("location:../../index.php");

?>