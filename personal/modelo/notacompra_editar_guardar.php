<?php include("../vista/cabeceracodigo.php"); ?>
                <main>
                    <div class="container-fluid px-4">
                        <br><br>                    
                        
                        <div class="card mb-4">
                           
                            <div class="card-body">

				<?php


$id_nota=$_POST['id'];
$numero=$_POST['numero'];
$fecha=$_POST['fecha'];
$monto=$_POST['monto'];
$proveedor=$_POST['proveedor'];
$encargado=$_POST['encargado'];

$sql_insert="UPDATE `notacompra` SET `nro`='$numero',`fecha`='$fecha',`total`='$monto',`idproveedor`='$proveedor',`codpersonal`='$encargado'
WHERE id=$id_nota";

$resultado=$mysqli->query($sql_insert);


if($resultado)
{

//------------------BITACORA-------------------------------------
$accion='Edito una nota de compra'.':'.$id_nota;
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


<BR>
<BR>
			<a href="../vista/notacompra.php" class="btn btn-danger" class="button">VOLVER</a>	
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
