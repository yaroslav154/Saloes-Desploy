<?php include("../vista/cabeceracodigo.php"); ?>
                <main>
				<div class="container-fluid px-4">


                            <div class="card-body">

								
							<?php
include('../config/conexion.php');


$ID_rol=$_POST['idrol'];
$ID_privilegio=$_POST['idprivilegio'];


$sql_insert= "INSERT INTO `privilegiorol`(`idrol`,`idprivilegio`) 
VALUES ( '$ID_rol', '$ID_privilegio' )";

$resultado=$mysqli->query($sql_insert);

if($resultado)
{

//------------------BITACORA-------------------------------------
$accion='Agrego un nuevo privelegio-rol';
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
  
 <a href="../vista/privilegiorol.php" class="btn btn-danger" class="button">VOLVER</a>

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
