<?php include("../vista/cabeceracodigo.php"); ?>
                <main>
                    <div class="container-fluid px-4">
                        <br><br>                    
                        
                        <div class="card mb-4">
                           
                            <div class="card-body">

								
							<?php
include('../config/conexion.php');


$ID_marca=$_POST['id'];
$nombre=$_POST['modelo'];
$color=$_POST['color'];
$cliente=$_POST['idcliente'];
$idcategoria=$_POST['idcategoriadispositivo'];
$idmarca=$_POST['idmarca'];

$sql_insert= "INSERT INTO dispositivo(id,modelo,color,idcliente,idcategoriadispositivo,idmarca) 
VALUES ( '$ID_marca', '$nombre' ,'$color', '$cliente' , '$idcategoria','$idmarca')";

$resultado=$mysqli->query($sql_insert);

if($resultado)
{

//------------------BITACORA-------------------------------------
$accion='Agrego un dispositivo';
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
  
 <a href="../vista/dispositivo.php" class="btn btn-danger" class="button">VOLVER</a>

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