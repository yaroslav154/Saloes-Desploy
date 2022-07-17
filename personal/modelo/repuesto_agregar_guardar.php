<?php include("../vista/cabeceracodigo.php"); ?>
                <main>
                    <div class="container-fluid px-4">
                        <br><br>                    
                        
                        <div class="card mb-4">
                           
                            <div class="card-body">

								
							<?php
include('../config/conexion.php');


$COD_repuesto=$_POST['cod'];
$descripción=$_POST['descripciónrepuesto'];
$precio=$_POST['precio'];
$categoria_repuesto=$_POST['categoriarepuesto'];
$marca=$_POST['marca'];
$categoria_dispositivo=$_POST['categoria'];


$sql_insert= "INSERT INTO repuesto(cod,descripcionrepuesto,precio,idcategoriarepuesto,idmarca,idcategoriadispositivo) 
VALUES ( '$COD_repuesto', '$descripción','$precio','$categoria_repuesto','$marca','$categoria_dispositivo')";

$resultado=$mysqli->query($sql_insert);

if($resultado)
{

//------------------BITACORA-------------------------------------
$accion='Agrego un nuevo repuesto';
 $ejecutor=$_SESSION['nombre_usu_lg'] ;

 $sql_insert2="INSERT INTO `bitacora`(`accion`,`ejecutor`) 
 VALUES ( '$accion','$ejecutor')";
 $resultado_usu2=$mysqli->query($sql_insert2);
 //------------------------------------------------------------------------

 echo '<font color="green">DATOS AGREGADOS EXITOSAMENTE </font>';
}else {
	echo '<font color="red">ERROR NO SE PUDO AGERGAR LOS DATOS , INTENTELO DE NUEVO</font>';
}
?>		
			
				
				<br>
				
				
  </div>
  <div>
  
 <a href="../vista/repuestos.php" class="btn btn-danger" class="button">VOLVER</a>

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