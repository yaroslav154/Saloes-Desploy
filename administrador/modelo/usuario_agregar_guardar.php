<?php include("../vista/cabeceracodigo.php"); ?>
                <main>
				<div class="container-fluid px-4">


                            <div class="card-body">

								
							<?php
include('../config/conexion.php');


$ID_usu=$_POST['cod'];
$nombre=$_POST['nombreusuario'];
$contraseña=md5($_POST['contraseña']);
$ID_estado=$_POST['idestado'];
$codpersonal=$_POST['codpersonal'];

$sql_insert= "INSERT INTO `usuario`(`cod`,`nombreusuario`,`contraseña`,`idestado`,`codpersonal`) 
VALUES ( '$ID_usu', '$nombre' ,'$contraseña', '$ID_estado' , '$codpersonal')";

$resultado=$mysqli->query($sql_insert);

if($resultado)
{
//------------------BITACORA-------------------------------------
$accion='Agrego un nuevo usuario';
 $ejecutor=$_SESSION['nombre_usu_lg'] ;

 $sql_insert2="INSERT INTO `bitacora`(`accion`,`ejecutor`) 
 VALUES ( '$accion','$ejecutor')";
 $resultado_usu2=$mysqli->query($sql_insert2);
 //------------------------------------------------------------------------


 echo '<font color="green">DATOS AGREGADOS EXITOSAMENTE </font>';
}ELSE {
	echo '<font color="red">ERROR NO SE PUDO AGERGAR LOS DATOS , INTENTELO DE NUEVO</font>';
}
?>		
			
				
				<br>
				
				
  </div>
  <div>
  
 <a href="../vista/usuario.php" class="btn btn-danger" class="button">VOLVER</a>

                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>

<?php include("../vista/piedecodigo.php"); ?>
