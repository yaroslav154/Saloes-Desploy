<?php include("../vista/cabeceracodigo.php"); ?>
                <main>
                    <div class="container-fluid px-4">
                        <br><br>                    
                        
                        <div class="card mb-4">
                           
                            <div class="card-body">

					
			
			<h2>EDITAR DISPOSITIVO</h2>
 
 
 <?php

include('../config/conexion.php');

$ID_dispositivo=$_POST['id'];
$nombre=$_POST['modelo'];
$color=$_POST['color'];
$cliente=$_POST['idcliente'];
$idcategoria=$_POST['idcategoriadispositivo'];
$idmarca=$_POST['idmarca'];

$sql = "UPDATE `dispositivo` SET `modelo`='$nombre',`color`='$color',`idcliente`='$cliente',`idcategoriadispositivo`='$idcategoria',`idmarca`='$idmarca'
WHERE id=$ID_dispositivo";


$resultado=$mysqli->query ($sql);

if($resultado)
{
//------------------BITACORA-------------------------------------
$accion='Edito un dispositivo';
 $ejecutor=$_SESSION['nombre_usu_lg'] ;

 $sql_insert2="INSERT INTO `bitacora`(`accion`,`ejecutor`) 
 VALUES ( '$accion','$ejecutor')";
 $resultado_usu2=$mysqli->query($sql_insert2);
 //------------------------------------------------------------------------

 echo '<font color="green">DATOS ACTUALIZADOS EXITOSAMENTE</font>';
}ELSE {
	echo '<font color="red">ERROR NO SE PUDO ACTUALIZAR LOS DATOS , INTENTELO DE NUEVO</font>';
}
?>
<br>
<br>				
	<a href="../vista/dispositivo.php" class="btn btn-danger" class="button">VOLVER</a>				
  </div>
  <div>

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
                </footer>
                <?php include("../vista/piedecodigo.php"); ?>