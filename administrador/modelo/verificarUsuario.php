verificar  
<?php
//1er paso
//session_start();


include('../config/conexion.php');

$nombre_usu=$_POST['nombre_usu'];
$contrasena_usu=md5($_POST['contrasena_usu']);

$sql_usu="select personal.cod,personal.nombrepersonal,personal.apellidop
			from usuario,personal,rolusuario
			where nombreusuario='$nombre_usu' 
			and contraseña='$contrasena_usu'
			and usuario.codpersonal=personal.cod
			and codusuario=usuario.cod
			and idrol=1";
$resultado_usu=$mysqli->query($sql_usu);


if($resultado_usu->num_rows>0) // si es correcto
{	



	while($fila_usu=$resultado_usu->fetch_assoc())
	{
		$nombre_persona=$fila_usu['nombrepersonal'];
		$apellido_persona=$fila_usu['apellidop'];

	}	


	session_start();
	//2 paso
	$_SESSION['nombre_usu_lg']=$nombre_persona;
	$_SESSION['apellido_usu_lg']=$apellido_persona;	
	
	header("location:../vista/indexadministrador.php");
	
//------------------BITACORA-------------------------------------
$accion='Inicio sesion';
$ejecutor=$_SESSION['nombre_usu_lg'] ;

$sql_insert2="INSERT INTO `bitacora`(`accion`,`ejecutor`) 
VALUES ( '$accion','$ejecutor')";
$resultado_usu2=$mysqli->query($sql_insert2);
//------------------------------------------------------------------------

}
else // si no encontro nada
{
	header("location:../vista/loginadministrador.php?estado=error");
}	

	


?>